<?php get_header(); ?>

<hr class="blu-divider"/>

<section id="category" class="container">

    <header class="sixteen columns clearfix">
        <h2>
            <?php wp_title(''); ?> 
        </h2>
    </header>

    <br class="clear"/>

    <?php get_sidebar('prodotti'); ?>

    <section id="elenco-prodotti" class="twelve columns clearfix">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()): the_post(); ?>
                <article class="four columns">
                    <header>
                        <h3>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h3>
                    </header>
                    <figure>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>');">
                        </a>
                    </figure>
                    
                    <ul class="article-tags tags-small">
                        <?php
                        echo get_the_term_list($post->ID, 'tag-prodotto', '<li>', '</li><li>', '<li>');
                        ?>
                    </ul>
                    <div class="share-this">
                        <span>Share</span>

                        <div class="social-button-small">
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
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <?php get_template_part('pagination'); ?>

</section>

<hr class="magenta-divider"/>

<?php get_template_part('brand-list'); ?>

<?php get_footer(); ?>