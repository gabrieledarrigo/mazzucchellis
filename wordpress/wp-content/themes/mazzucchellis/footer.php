<footer>
    <section id="footer-menu" class="container">
        <nav id="nav-categorie" class="four columns">
            <h3>Categorie</h3>
            <ul>
                <li>
                    <a href="<?php bloginfo('url'); ?>/categoria-prodotto/travestimenti" title="Travestimenti" class="travestimenti">
                        Travestimenti 
                    </a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/categoria-prodotto/accessori" title="Accessori" class="accessori">
                        Accessori </a>
                </li>
                <li>  
                    <a href="<?php bloginfo('url'); ?>/categoria-prodotto/pirotecnica" title="Pirotecnica" class="pirotecnica">
                        Pirotecnica
                    </a>
                </li>
                <li>  
                    <a href="<?php bloginfo('url'); ?>/category/news" title="News" class="news">
                        News
                    </a>
                </li>
            </ul>
        </nav>

        <nav id="nav-informazioni" class="four columns">
            <h3>Informazioni</h3>
            <ul>
                <li>
                    <a href="<?php echo get_page_by_slug('informazioni/archivio'); ?>" title="Archivio" class="archivio">
                        Archivio
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_page_by_slug('informazioni/chi-siamo'); ?>" title="Chi Siamo" class="chi-siamo">
                        Chi siamo
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_page_by_slug('informazioni/i-nostri-brand'); ?>" title="Brands" class="brand">
                        I nostri Brands
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_page_by_slug('informazioni/newsletter'); ?>" title="Newsletter" class="newsletter">
                        Newsletter
                    </a>
                </li>
            </ul>
        </nav>

        <nav id="nav-social" class="four columns">
            <h3>Follow Us</h3>
            <ul>
                <li>  
                    <a href="https://www.facebook.com/mazzucchelliscostumi" title="Seguici su Facebook">
                        Facebook 
                    </a>
                </li>
                <li>  
                    <a href="http://www.shopmazzucchellis.com/" title="Compra online sullo Shop ufficiale">
                        Compra online
                    </a>
                </li>
                <li> 
                    <a href="http://mazzucchellis.com/feed/" title="Abbonati al nostro feed RSS">
                        Rss 
                    </a>
                </li>
                <li> 
                    <a href="http://mazzucchellis.com/informazioni/chi-siamo/" title="Contattaci">
                        Contatti
                    </a>
                </li>
            </ul>
        </nav>

        <section id="last" class="four columns clearfix">
            <?php get_sidebar('footer'); ?>
        </section>

        <hgroup class="eight columns">
            <h1>
                <a href="#top">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <h2><?php bloginfo('description'); ?></h2>
        </hgroup>

    </section>
    <div id="sub-footer">

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>