<?php get_header(); ?>

<hr class="blu-divider"/>

<section id="blog" class="container">
    <header class="sixteen columns clearfix">
        <h2 class="error-icon">404</h2>
    </header>

    <section id="article-container" class="nine columns">

        <article>
            <h2 class="title">
                Spiacenti
            </h2>
            <div>
                <p>Ma non abbiamo trovato ciò che stavi cercando</p>
            </div>
            <div>
                <p>
                    <a href="<?php bloginfo('url'); ?>" title="Torna in home page">
                        Clicca qui per tornare in HomePage</a>
                </p>
            </div>
        </article>

        <br class="clear"/>

    </section>

    <?php get_sidebar('articoli'); ?>
</section>

<hr class="magenta-divider"/>

<?php get_template_part('brands'); ?>

<?php get_footer(); ?>
