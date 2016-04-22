<section id="slide" class="sixteen columns">
    <div class="flexslider">
        <ul class="slides">
            <?php
            $slideshow_args = array(
                'post_type' => 'slideshow',
                'posts_per_page' => 4
            );
            $post_slideshow = new WP_Query($slideshow_args);
            ?>

            <?php if ($post_slideshow->have_posts()) : ?>
                <?php while ($post_slideshow->have_posts()) : $post_slideshow->the_post(); ?>
                    <li>
                        <?php if (get_post_meta($post->ID, 'link_slideshow', true)): ?>
                            <a href=" <?php echo get_post_meta($post->ID, 'link_slideshow', true); ?>"
                               title="<?php the_title(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail(array(932, 300));
                                }
                                ?>
                            </a>
                        <?php else: ?>
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail(array(932, 300));
                            }
                            ?>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </ul>
    </div>
</section>
