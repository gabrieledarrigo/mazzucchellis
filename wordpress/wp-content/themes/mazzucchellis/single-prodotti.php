<?php
get_header('internal');

$parent = get_parent_term_by_post_id(get_queried_object()->ID, 'categoria-prodotto', $wp_query);

$parent->link = get_term_link((int) $parent->term_id, $parent->taxonomy);
?>

<hr class="magenta-divider"/>

<section id="category" class="container">

    <header class="sixteen columns clearfix">
        <h2 class="<?php echo $parent->slug; ?>-icon">
            <a href="<?php echo $parent->link; ?>">
                <?php echo $parent->name; ?>
            </a>
        </h2>
    </header>

    <br class="clear"/>

    <?php get_sidebar('prodotti'); ?>

    <article class="prodotto-singolo twelve columns">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()): the_post(); ?>

                <article class="article-sx eight columns alpha">
                    <header>
                        <h3>
                            <a href="<?php the_permalink(); ?>" title=" <?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                    </header>

                    <?php the_content(); ?>

                </article>

                <article class="prodotto-info four columns omega">

                    <h5 class="categorie-icon">Categorie</h5>
                    <ul class="prodotto-category">
                        <?php
                        echo get_the_term_list($post->ID, 'categoria-prodotto', '<li>', '</li><li>', '<li>');
                        ?>
                    </ul>

                    <h5>Tag</h5>
                    <ul class="prodotto-tags">
                        <?php
                        echo get_the_term_list($post->ID, 'tag-prodotto', '<li>', '</li><li>', '<li>');
                        ?>
                    </ul>

                    <?php if (get_post_meta($post->ID, 'link_shop', true)): ?>
                        <h5>Compra online</h5>
                        <ul class="prodotto-shop">
                            <li>
                                <a href="<?php echo get_post_meta($post->ID, 'link_shop', true); ?>" title="Acquista online sullo Shop ufficiale">
                                    Acquista
                                </a>
                            </li>
                        </ul>
                    <?php endif; ?>

                    <?php if (get_post_meta($post->ID, 'codice_prodotto', true)): ?>
                        <h5>Codice Prodotto</h5>
                        <ul class="prodotto-codice">
                            <li>
                                <a href="#" title="Codice Prodotto">
                                    <?php echo get_post_meta($post->ID, 'codice_prodotto', true); ?>
                                </a>
                            </li>
                        </ul>
                    <?php endif; ?>

                    <br/>

                    <h5>Informazioni</h5>

                    <ul class="prodotto-contatti">
                        <li>
                            <a href="tel:+390331220344" title="Telefono">
                                Tel. 0331 220344
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.it/maps/place/Mazzucchelli'S+Di+Mazzucchelli+%26+C.+Sas/@45.629,8.78697,15z/data=!4m2!3m1!1s0x0:0x3d9b8e6a052077fd?sa=X&ved=0ahUKEwjukMeP_oXKAhUCJhoKHcIdCtsQ_BIIcDAK" title="Indirizzo">
                                Via Marconi 12, Samarate (VA) 
                            </a>
                        </li>
                    </ul>

                    <br/>

                    <h5 class="news-icon">Condividi</h5>
                    <div class="social-button-large social-gray">
                        <ul>
                            <li>
                                <a class="icon-facebook" rel="nofollow" href="http://www.facebook.com/"
                                   onclick="popUp = window.open(
                                                               'http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>',
                                                               'Share on Facebook',
                                                               'scrollbars=yes,width=800,height=600');
                                                       popUp.focus();
                                                       return false">
                                    <img src="<?php bloginfo('template_url'); ?>/img/facebook-share.png" title="Share on Facebook" alt="Share on Facebook"/>
                                </a>
                            </li>
                            <li>
                                <a class="icon-twitter" rel="nofollow"  href="http://twitter.com/"
                                   onclick="popUp = window.open(
                                                               'http://twitter.com/intent/tweet?text=\'<?php the_title(); ?>\' via @Mazzucchellis - <?php the_permalink(); ?>',
                                                               'Share on Twitter',
                                                               'scrollbars=yes,width=800,height=600');
                                                       popUp.focus();
                                                       return false">
                                    <img src="<?php bloginfo('template_url'); ?>/img/twitter-share.png" title="Share on Twitter" alt="Share on Twitter"/>
                                </a>
                            </li>
                            <li>
                                <a class="icon-google-plus" rel="nofollow" href="http://www.plus.google.com/"
                                   onclick="popUp = window.open(
                                                               'https://plus.google.com/share?url=<?php the_permalink(); ?>',
                                                               'Share on GooglePlus',
                                                               'scrollbars=yes,width=800,height=600');
                                                       popUp.focus();
                                                       return false">

                                    <img src="<?php bloginfo('template_url'); ?>/img/google-plus-share.png" title="Share on Google Plus" alt="Share on Google Plus"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>

            <?php endwhile; ?>
        <?php endif; ?>

        <br class="clear"/>

        <article class="twelve columns alpha">

            <h4 class="related-title">Potrebbero Interessarti</h4>

            <?php
            $tag_correlati = get_the_terms($post->ID, 'tag-prodotto');

            $tag = array();

            foreach ($tag_correlati as $single_tag) {
                $tag[] = $single_tag->term_id;
            }

            $args = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'tag-prodotto',
                        'terms' => $tag,
                        'operator' => 'IN'
                    )
                ),
                'post__not_in' => array($post->ID),
                'posts_per_page' => 6,
                'ignore_sticky_posts' => 1
            );

            $prodotti_correlati = new WP_Query($args);
            ?>

            <?php if ($prodotti_correlati->have_posts()): ?>
                <?php while ($prodotti_correlati->have_posts()) : $prodotti_correlati->the_post(); ?>
                    <article class="four columns prodotto-correlato">
                        <header>
                            <h5>
                                <a href="<?php the_permalink(); ?>" title=" <?php the_title(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h5>
                        </header>
                        <figure>
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                                ?>
                            </a>
                        </figure>
                        <ul class="article-category category-small">
                            <?php
                            echo get_the_term_list($post->ID, 'tag-prodotto', '<li>', '</li><li>', '<li>');
                            ?>
                        </ul>
                    </article>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php endif; ?>
        </article>

        <?php comments_template(); ?>

    </article>

</section>

<hr class="magenta-divider"/>

<?php get_template_part('brand-list'); ?>

<?php get_footer(); ?>