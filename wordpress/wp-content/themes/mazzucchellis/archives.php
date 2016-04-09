<?php
/*
  Template Name: Archives
 */
get_header();
?>

<hr class="blue-divider"/>

<section id="blog" class="container">
    <header class="sixteen columns clearfix">
        <h2 class="archivio-icon">Archivio</h2>
    </header>

    <section id="article-container" class="nine columns">
        <article>
            <div class="data">
                <h3><?php the_time('d-m-Y'); ?></h3>
            </div>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <p>Ecco l'archivio di tutti i nostri articoli</p>

            <h3>Archivio per data: </h3>

            <ul class="archivio-mese">
                <?php wp_get_archives('type=monthly&show_post_count=1') ?>  
            </ul>

            <h3>Archivio per titolo</h3>

            <ul class="archivio-titolo">
                <?php wp_get_archives('type=alpha') ?>  
            </ul>

        </article>

        <br class="clear"/>

    </section>

    <?php get_sidebar('articoli'); ?>
</section>

<hr class="magenta-divider"/>

<?php get_template_part('brand-list'); ?>

<?php get_footer(); ?>