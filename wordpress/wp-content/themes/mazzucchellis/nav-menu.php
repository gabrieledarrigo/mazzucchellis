<nav id="menu" class="sixteen columns">
    <ul>
        <li class="menu-button pirotecnica">
            <span>Pirotecnica</span>
            <div id="pirotecnica" class="menu-wrapper">
                <ul>
                    <li class="elenco">
                        <h2>Pirotecnica</h2>
                        <ul>
                            <?php
                            $taxonomy = 'categoria-prodotto';
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

        <li class="menu-button costumi">
            <span>Costumi</span>
            <div id="costumi" class="menu-wrapper">
                <ul>
                    <li class="elenco">
                        <h2>Costumi Uomo</h2>
                        <ul>
                            <?php
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

                <img src="<?php bloginfo('template_url'); ?>/img/icon/costumi-menu-icon.png"
                     title="Costumi" alt="Costumi" class="menu-background"/>
            </div>
        </li>

        <li class="menu-button gadget">
            <span>Gadget</span>
            <div id="gadget" class="menu-wrapper">
                <ul>
                    <li class="elenco">
                        <h2>Gadget</h2>
                        <ul>
                            <?php
                            $category = get_term_by('slug', 'gadget', $taxonomy);
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

                <img src="<?php bloginfo('template_url'); ?>/img/icon/gadget-menu-icon.png"
                     title="Gadget" alt="Gadget" class="menu-background"/>
            </div>
        </li>

        <li class="menu-button custom">
            <span>
                <?php
                $menu = wp_get_nav_menu_object('menu-custom');
                $custom_menu_title = '';
                if ($menu) {
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    $custom_menu_title = $menu_items[0]->title;
                }
                ?>

                <?php echo $custom_menu_title; ?>
            </span>

            <div id="custom" class="menu-wrapper">
                <ul>
                    <li class="elenco">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-custom',
                            'container' => ' '
                        ));
                        ?>
                    </li>
                </ul>

                <img src="<?php bloginfo('template_url'); ?>/img/icon/feste-menu-icon.png"
                     title="<?php echo $custom_menu_title; ?>" alt="<?php echo $custom_menu_title; ?>" class="menu-background"/>
            </div>
        </li>

        <li class="menu-button news">
            <span>
                <a href="<?php bloginfo('url'); ?>/category/news" title="News">News</a>
            </span>
        </li>
    </ul>
</nav>