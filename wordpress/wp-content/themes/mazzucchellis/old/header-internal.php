<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="it"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="it"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="it"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="it"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <meta name="description" content="Mazzucchellis: maschere, abbigliamento, pirotecnica">
        <meta name="author" content="Gabriele D'Arrigo - Br-others.com">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/base.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skeleton.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?ts=1">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css">

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/socialite.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>

        <?php if (is_page('newsletter')) : ?>
            <script type="text/javascript" src="http://www.google.com/jsapi"></script>
            <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mailchimp.js"></script>
            <script type="text/javascript" src="http://downloads.mailchimp.com/js/jquery.mailcheck.min.js"></script>
            <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mailchimp_utils.js"></script>
        <?php endif; ?>

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <hr class="blu-divider"/>

        <section class="container">

            <header class="eleven columns">
                <hgroup>
                    <h1>
                        <a href=" <?php bloginfo('url'); ?>" title=" <?php bloginfo('name'); ?>">
                            Mazzucche<span class="azure">l</span><span class="magenta">l</span><span class="yellow">i</span>s
                        </a>
                    </h1>
                    <h3> <?php bloginfo('description'); ?> </h3>
                </hgroup>
            </header>

            <nav id="sub-nav" class="five columns">
                <?php get_search_form(); ?>

                <ul id="social">
                    <li>
                        <a id="social-facebook" href="https://www.facebook.com/mazzucchelliscostumi/" title="Seguici su Facebook">
                            <span>Seguici su Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a id="social-ebay" href="http://myworld.ebay.it/carnival_shop/" title="Acquista da noi su Ebay">
                            <span>Acquista su Ebay</span>
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
                        <div class="menu-wrapper">
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
                        <div class="menu-wrapper">
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
                        <div class="menu-wrapper">
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
                        <div class="menu-wrapper">
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

        </section>