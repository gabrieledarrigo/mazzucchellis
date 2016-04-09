<?php get_header(); ?>

<hr class="black-divider"/>

<section id="blog" class="container">
    <header class="sixteen columns clearfix">
        <h2 class="brand-icon">
            Brand
        </h2>
    </header>

    <section id="article-container" class="nine columns">
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
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
                                <a class="socialite facebook-like" data-send="false" data-layout="box_count" data-width="60" data-show-faces="false" data-href="<?php the_permalink(); ?>">
                                    Share on Facebook
                                </a>
                            </li>
                            <li>
                                <a class="socialite twitter-share" data-url="<?php the_permalink(); ?>" data-count="vertical" data-text="<?php the_title(); ?>" data-via="Mazzucchellis" 
                                   data-lang="it" data-related="Mazzucchellis" data-hashtags="Travestimenti, Maschere,  Accessori, Pirotecnica">
                                    Share on Twitter
                                </a>
                            </li>
                            <li>
                                <a class="socialite googleplus-one"  data-size="tall" data-href="<?php the_permalink(); ?>">
                                    Share on Google Plus
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php comments_template(); ?>

        <br class="clear"/>

    </section>

    <?php get_sidebar('articoli'); ?>
</section>

<hr class="magenta-divider"/>

<?php get_template_part('brand-list'); ?>

<?php get_footer(); ?>