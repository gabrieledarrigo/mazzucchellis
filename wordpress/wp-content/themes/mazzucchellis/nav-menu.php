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

                <img src="<?php bloginfo('template_url'); ?>/img/icon/gadget-menu-icon.png" title="Gadget" alt="Gadget" class="menu-background"/>
            </div>
        </li>

        <li class="menu-button custom">
            <span>Feste a tema</span>

            <div id="custom" class="menu-wrapper">
                <ul>
                    <li class="elenco">
                        <h2>Kit Party</h2>
                        <ul>
                            <?php
                            $category = get_term_by('slug', 'kit-party', $taxonomy);

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
                        <ul>
                            <h2>Allestimenti con palloncini</h2>
                            <ul>
                                <?php
                                $category = get_term_by('slug', 'allestimenti-con-palloncini', $taxonomy);

                                $args = array(
                                    'child_of' => $category->term_id,
                                    'title_li' => '',
                                    'taxonomy' => $taxonomy,
                                );

                                wp_list_categories($args);
                                ?>
                            </ul>
                        </ul>
                    </li>
                    <li class="elenco">
                        <ul>
                            <h2>Idee per feste</h2>
                            <ul>
                                <?php
                                $category = get_term_by('slug', 'idee-per-feste-a-tema', $taxonomy);

                                $args = array(
                                    'child_of' => $category->term_id,
                                    'title_li' => '',
                                    'taxonomy' => $taxonomy,
                                );

                                wp_list_categories($args);
                                ?>
                            </ul>
                        </ul>
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