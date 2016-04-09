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

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.5&appId=362567717178258";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

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

            <?php get_template_part('social'); ?>

            <br class="clear"/>

            <?php get_template_part('nav-menu'); ?>
        </section>