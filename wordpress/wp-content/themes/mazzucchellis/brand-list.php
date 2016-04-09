<section id="brand" class="container">
    <header>
        <h2 class="brand-icon">I Nostri Brand</h2>
    </header>
    <?php
    $brand_args = array(
        'post_type' => 'brand'
        , 'posts_per_page' => 5
    );
    $brand = new WP_Query($brand_args);
    ?>

    <?php if ($brand->have_posts()) : ?>
        <?php while ($brand->have_posts()) : $brand->the_post(); ?>
    
            <article class="three columns">
                <figure>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail');
                        }
                        ?>
                    </a>
                </figure>
            </article>
    
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

</section>