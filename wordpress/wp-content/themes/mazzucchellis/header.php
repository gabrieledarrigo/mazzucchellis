<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="it"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="it"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="it"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="it"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <meta name="description" content="Mazzucchellis: maschere, abbigliamento, pirotecnica">

        <!-- 
         Powered by
         ____ ____    _    ____  ____  ___ ____  ___               _    ____ ___ ____  ____  _____ ____ ___ ____ _   _ 
        / ___|  _ \  / \  |  _ \|  _ \|_ _/ ___|/ _ \             / \  / ___|_ _|  _ \|  _ \| ____/ ___|_ _/ ___| \ | |
       | |  _| | | |/ _ \ | |_) | |_) || | |  _| | | |  _____    / _ \| |    | || |_) | | | |  _| \___ \| | |  _|  \| |
       | |_| | |_| / ___ \|  _ <|  _ < | | |_| | |_| | |_____|  / ___ \ |___ | ||  _ <| |_| | |___ ___) | | |_| | |\  |
        \____|____/_/   \_\_| \_\_| \_\___\____|\___/          /_/   \_\____|___|_| \_\____/|_____|____/___\____|_| \_|

        -->

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">             
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/base.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skeleton.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?ts=4">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css">

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/socialite.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
        
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.5&appId=362567717178258";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>

        <script>
            $(document).ready(function () {
                $('.flexslider').flexslider({
                    animation: "slide"
                });
            });
        </script>
        <?php wp_head(); ?>
    </head>
    <body>
        <hr class="blu-divider"/>

        <section class="container">
            <header id="header" class="ten columns">
                <hgroup>
                    <h1 id="logo">
                        <a name="top" href="<?php bloginfo('url'); ?>" title=" <?php bloginfo('name'); ?>">
                            <span class="logo-text">
                                Mazzucchelli's
                            </span>

                            <div id="logo-section">
                                <span class="logo-section-item logo-section-azure">
                                    Pirotecnica
                                </span>
                                <span class="logo-section-item logo-section-magenta">
                                    Costumi <span class="hidden-xs">di carnevale</span>
                                </span>
                                <span class="logo-section-item logo-section-yellow">
                                    <span class="hidden-xs">Articoli per </span>Feste
                                </span>
                            </div>
                        </a>
                    </h1>
                </hgroup>
            </header>

            <nav id="sub-nav" class="six columns">
                <?php get_search_form(); ?>

                <ul id="social">
                    <li>
                        <a id="social-facebook" href="https://www.facebook.com/mazzucchelliscostumi/" title="Seguici su Facebook">
                            <span>Seguici su Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a id="social-instagram" href="https://www.instagram.com/mazzucchellis_costumi/" title="Seguici su Instagram">
                            <span>Seguici su Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a id="social-cart" href="http://www.shopmazzucchellis.com/" title="Acquista sullo Shop ufficiale">
                            <span>Acquista sullo Shop ufficiale</span>
                        </a>
                    </li>
                    <li>
                        <a id="social-rss" href="http://mazzucchellis.com/feed/" title="Abbonati al feed RSS">
                            <span>Abbonati al feed RSS</span>
                        </a>
                    </li>
                    <li>
                        <a id="social-contatti" href="http://mazzucchellis.com/informazioni/chi-siamo/" title="Contattaci">
                            <span>Contattaci</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <br class="clear"/>

            <nav id="menu" class="sixteen columns">
                <ul>
                    <li class="menu-button travestimenti">
                        <span>Travestimenti</span>
                        <div id="travestimenti" class="menu-wrapper">
                            <ul>
                                <li class="elenco">
                                    <h2>Costumi Uomo</h2>
                                    <ul>
                                        <?php
                                        $taxonomy = 'categoria-prodotto';

                                        $category = get_term_by('slug', 'costumi-uomo', $taxonomy);

                                        $args = array(
                                            'child_of' => $category->term_id,
                                            'title_li' => '',
                                            'taxonomy' => $taxonomy,
                                        );

                                        wp_list_categories($args);
                                        ?>
                                    </ul>
                                </li>

                                <li class="elenco">
                                    <h2>Costumi Donna</h2>
                                    <ul>
                                        <?php
                                        $category = get_term_by('slug', 'costumi-donna', $taxonomy);

                                        $args = array(
                                            'child_of' => $category->term_id,
                                            'title_li' => '',
                                            'taxonomy' => $taxonomy,
                                        );

                                        wp_list_categories($args);
                                        ?>
                                    </ul>
                                </li>

                                <li class="elenco">
                                    <h2>Costumi Bambino</h2>
                                    <ul>
                                        <?php
                                        $category = get_term_by('slug', 'costumi-bambino', $taxonomy);

                                        $args = array(
                                            'child_of' => $category->term_id,
                                            'title_li' => '',
                                            'taxonomy' => $taxonomy,
                                        );

                                        wp_list_categories($args);
                                        ?>
                                    </ul>
                                </li>
                            </ul>

                            <img src="<?php bloginfo('template_url'); ?>/img/icon/travestimenti-menu-icon.png" 
                                 title="Travestimenti" alt="Travestimenti" class="menu-background"/>
                        </div>
                    </li>

                    <li class="menu-button accessori">
                        <span>Accessori</span>
                        <div id="accessori" class="menu-wrapper">
                            <ul>
                                <li class="elenco">
                                    <h2>Accessori</h2>
                                    <ul>
                                        <?php
                                        $category = get_term_by('slug', 'accessori', $taxonomy);
                                        $allestimenti_category = get_term_by('slug', 'allestimenti', $taxonomy);

                                        $args = array(
                                            'child_of' => $category->term_id,
                                            'title_li' => '',
                                            'exclude' => $allestimenti_category->term_id,
                                            'taxonomy' => $taxonomy,
                                        );

                                        wp_list_categories($args);
                                        ?>
                                    </ul>
                                </li>

                                <li class="elenco">
                                    <h2>Allestimenti</h2>
                                    <ul>
                                        <?php
                                        $args = array(
                                            'child_of' => $allestimenti_category->term_id,
                                            'title_li' => '',
                                            'taxonomy' => $taxonomy,
                                        );

                                        wp_list_categories($args);
                                        ?>
                                    </ul>
                                </li>
                            </ul>

                            <img src="<?php bloginfo('template_url'); ?>/img/icon/accessori-menu-icon.png" 
                                 title="Accessori" alt="Accessori" class="menu-background"/>
                        </div>
                    </li>

                    <li class="menu-button pirotecnica">
                        <span>Pirotecnica</span>
                        <div id="pirotecnica" class="menu-wrapper">
                            <ul>
                                <li class="elenco">
                                    <h2>Pirotecnica</h2>
                                    <ul>
                                        <?php
                                        $category = get_term_by('slug', 'pirotecnica', $taxonomy);

                                        $args = array(
                                            'child_of' => $category->term_id,
                                            'title_li' => '',
                                            'taxonomy' => $taxonomy,
                                        );

                                        wp_list_categories($args);
                                        ?>
                                    </ul>
                                </li>
                            </ul>

                            <img src="<?php bloginfo('template_url'); ?>/img/icon/pirotecnica-menu-icon.png" 
                                 title="Pirotecnica" alt="Pirotecnica" class="menu-background"/>
                        </div>
                    </li>

                    <li class="menu-button news">
                        <span>
                            <a href="<?php bloginfo('url'); ?>/category/news" title="News">News</a>
                        </span>
                    </li>

                    <li class="menu-button info">
                        <span>Informazioni</span>
                        <div id="informazioni" class="menu-wrapper">
                            <ul>
                                <li class="elenco">
                                    <h2>Informazioni</h2>
                                    <ul>
                                        <?php
                                        wp_list_pages(array(
                                            'title_li' => ''
                                            , 'sort_columns' => 'menu_order'
                                            , 'exclude' => '153'
                                                )
                                        );
                                        ?>
                                    </ul>
                                </li>
                            </ul>

                            <img src="<?php bloginfo('template_url'); ?>/img/icon/informazioni-menu-icon.png" 
                                 title="Pirotecnica" alt="Pirotecnica" class="menu-background"/>
                        </div>
                    </li>
                </ul>
            </nav>

            <br class="clear"/>

            <section id="slide" class="sixteen columns">
                <div class="flexslider">
                    <ul class="slides">
                        <?php
                        $slideshow_args = array(
                            'post_type' => 'slideshow'
                            , 'posts_per_page' => 4
                        );

                        $post_slideshow = new WP_Query($slideshow_args);
                        ?>
                        <?php if ($post_slideshow->have_posts()) : ?>
                            <?php while ($post_slideshow->have_posts()) : $post_slideshow->the_post(); ?>

                                <li>
                                    <?php if (get_post_meta($post->ID, 'link_slideshow', true)): ?>
                                        <a href=" <?php echo get_post_meta($post->ID, 'link_slideshow', true); ?>" title="<?php the_title(); ?>">
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

        </section>