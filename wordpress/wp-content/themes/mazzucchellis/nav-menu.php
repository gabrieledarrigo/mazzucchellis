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

        <li class="menu-button feste">
            <span>
                <?php
                $menu = wp_get_nav_menu_object('menu-custom');
                $menu_items = wp_get_nav_menu_items($menu->term_id);

                echo $menu_items[0]->title;
                ?>
            </span>

            <div id="informazioni" class="menu-wrapper">
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

                <img src="<?php bloginfo('template_url'); ?>/img/icon/informazioni-menu-icon.png" 
                     title="Informazioni" alt="Informazioni" class="menu-background"/>
            </div>
        </li>

        <li class="menu-button news">
            <span>
                <a href="<?php bloginfo('url'); ?>/category/news" title="News">News</a>
            </span>
        </li>
    </ul>
</nav>