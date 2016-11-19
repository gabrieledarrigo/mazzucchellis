<?php get_header(); ?>

    <hr class="black-divider"/>

    <section id="in-evidenza" class="container">
        <header class="sixteen columns clearfix">
            <h2 class="in-evidenza-icon">
                In evidenza
            </h2>
        </header>

        <?php
        $featured_args = array(
            'categoria-prodotto' => 'in-evidenza',
            'post_type' => 'prodotti',
            'posts_per_page' => 8
        );
        $featured_posts = new WP_Query($featured_args);
        ?>

        <?php if ($featured_posts->have_posts()) : ?>
            <?php while ($featured_posts->have_posts()): $featured_posts->the_post(); ?>
                <article class="four columns">
                    <header>
                        <h3>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                    </header>

                    <figure>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                           style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>');">
                        </a>
                    </figure>

                    <div class="share-this">
                        <span>Condividi</span>

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
                    </div>

                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <br class="clear"/>

        <div id="more-prodotti" class="four columns offset-by-twelve">
            <?php
            $in_evidenza_link = get_term_link('in-evidenza', 'categoria-prodotto');
            ?>

            <a href="<?php echo $in_evidenza_link; ?>" title="Scopri gli altri prodotti">
                Scopri gli altri prodotti
            </a>
        </div>

    </section>

    <hr class="blu-divider"/>

    <section id="blog" class="container">
        <header class="sixteen columns clearfix">
            <h2 class="news-icon">News</h2>
        </header>

        <section id="article-container" class="nine columns">
            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article>
                        <div class="data">
                            <h3>
                                <?php the_time('d-m-Y'); ?>
                            </h3>
                        </div>

                        <header>
                            <h2 class="title">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                        </header>

                        <?php the_content(); ?>

                        <ul class="article-tags">
                            <li>Tag:</li>
                            <?php the_tags('<li>', '</li><li>', '<li>'); ?>
                        </ul>

                        <ul class="article-category">
                            <li>Categorie:</li>
                            <li><?php the_category(', '); ?></li>
                        </ul>

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
                                <li class="comment">
                                    <a class="comment-link" href="<?php echo get_comments_link(); ?>" title="Commenta">
                                        Commenta
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </article>
                <?php endwhile; ?>
            <?php endif; ?>

        </section>

        <?php get_sidebar('articoli'); ?>

        <br class="clear"/>

        <div id="more-news" class="four columns offset-by-twelve">
            <a href="<?php bloginfo('url'); ?>/category/news" title="Scopri le altre news">
                Scopri le altre news
            </a>
        </div>

    </section>

    <hr class="magenta-divider"/>

<?php get_template_part('brand-list'); ?>

<?php get_footer(); ?>