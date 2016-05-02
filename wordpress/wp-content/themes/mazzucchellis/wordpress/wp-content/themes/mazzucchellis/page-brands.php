<?php get_header(); ?>

<hr class="green-divider"/>

<section id="blog" class="container">
    <header>
        <h2 class="brand-icon">I Nostri Brand</h2>
    </header>

    <section id="article-container" class="nine columns">
        <?php
        $args = array(
            'post_type' => 'brand'
        );
        $brands = new WP_Query($args);
        ?>
        <?php if ($brands->have_posts()): ?>
            <?php while ($brands->have_posts()) : $brands->the_post(); ?>
                <article>
                    <header>
                        <h2 class="title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </header>
                    
                    <div class="data">
                        <h3><?php the_time('d-m-Y'); ?></h3>
                    </div>

                    <?php the_content(); ?>

                    <div class="social-button-large">
                        <ul>
                            <li>
                                <a class="icon-facebook" rel="nofollow" href="http://www.facebook.com/"
                                   onclick="popUp = window.open(
                                       'http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>',
                                       'Share on Facebook',
                                       'scrollbars=yes,width=800,height=600');
                                       popUp.focus();
                                       return false">
                                    <img src="<?php bloginfo('template_url'); ?>/img/facebook-share.png"
                                         title="Share on Facebook" alt="Share on Facebook"/>
                                </a>
                            </li>
                            <li>
                                <a class="icon-twitter" rel="nofollow" href="http://twitter.com/"
                                   onclick="popUp = window.open(
                                       'http://twitter.com/intent/tweet?text=\'<?php the_title(); ?>\' via @Mazzucchellis - <?php the_permalink(); ?>',
                                       'Share on Twitter',
                                       'scrollbars=yes,width=800,height=600');
                                       popUp.focus();
                                       return false">
                                    <img src="<?php bloginfo('template_url'); ?>/img/twitter-share.png"
                                         title="Share on Twitter" alt="Share on Twitter"/>
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

                                    <img src="<?php bloginfo('template_url'); ?>/img/google-plus-share.png"
                                         title="Share on Google Plus" alt="Share on Google Plus"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

        <br class="clear"/>

        <?php get_template_part('pagination'); ?>

    </section>

    <?php get_sidebar('articoli'); ?>

</section>

<hr class="magenta-divider"/>

<?php get_template_part('brand-list'); ?>

<?php get_footer(); ?>