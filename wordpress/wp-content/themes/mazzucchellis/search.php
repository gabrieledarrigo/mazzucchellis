<?php get_header(); ?>

<?php
$searched_args = array(
    'post_type' => 'prodotti'
    , 'meta_key' => 'codice_prodotto'
    , 'meta_value' => $s
);
$searched_posts = new WP_Query($searched_args);
?>

<section id="in-evidenza" class="container">
    <?php ('meta_key=movie&meta_value=' . $s); ?>

    <?php if ($searched_posts->have_posts()) : ?>
        <header class="sixteen columns clearfix">
            <h4 class="ricerca-icon">Hai cercato Codice Prodotto: <?php echo $s; ?> </h4>
        </header>

        <?php while ($searched_posts->have_posts()): $searched_posts->the_post(); ?>
            <article class="four columns">
                <header>
                    <h3>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                </header>

                <figure>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>');">
                    </a>
                </figure>

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
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <br class="clear"/>
</section>

<section id="in-evidenza" class="container">
    <?php if (have_posts()) : ?>
        <header class="sixteen columns clearfix">
            <h4 class="ricerca-icon">Hai cercato: <?php echo $s; ?></h4>
        </header>

        <?php while (have_posts()): the_post(); ?>
            <article class="four columns">
                <header>
                    <h3>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                </header>

                <figure>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>');">
                    </a>
                </figure>

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
        <?php wp_reset_postdata(); ?>

    <?php else: ?>
        <h2>Spiacenti, la ricerca non ha prodotto alcun risultato</h2>
    <?php endif; ?>

    <br class="clear"/>

</section>

<hr class="magenta-divider"/>

<?php get_template_part('brand-list'); ?>

<?php get_footer(); ?>