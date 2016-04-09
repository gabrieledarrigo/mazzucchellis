<?php

/**
 *  Custom Post Type: Slideshow
 */
function create_slideshow_type() {
    $labels = array(
        'name' => _x('Slideshow', 'slideshow'),
        'singular_name' => _x('Slideshow', 'slideshow'),
        'add_new' => _x('Aggiungi nuova', 'slideshow'),
        'add_new_item' => __('Aggiungi nuova slideshow'),
        'edit_item' => __('Modifica slideshow'),
        'new_item' => __('Nuova slideshow'),
        'all_items' => __('Tutte le slideshow'),
        'view_item' => __('Visualizza slideshow'),
        'search_items' => __('Cerca slideshow'),
        'not_found' => __('Nessuna slideshow trovata'),
        'not_found_in_trash' => __('Nessuna slideshow nel cestino'),
        'menu_name' => __('Slideshow')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('slideshow', $args);
}

add_action('init', 'create_slideshow_type', 0);

/**
 *  Custom Post Type: Prodotti
 */
function create_prodotti_type() {
    $labels = array(
        'name' => _x('Prodotti', 'prodotti'),
        'singular_name' => _x('Prodotto', 'prodotto'),
        'add_new' => _x('Aggiungi nuovo', 'prodotto'),
        'add_new_item' => __('Aggiungi nuovo prodotto'),
        'edit_item' => __('Modifica prodotto'),
        'new_item' => __('Nuovo prodotto'),
        'all_items' => __('Tutti i prodotti'),
        'view_item' => __('Visualizza prodotto'),
        'search_items' => __('Cerca prodotto'),
        'not_found' => __('Nessun prodotto trovato'),
        'not_found_in_trash' => __('Nessun prodotto nel cestino'),
        'menu_name' => __('Prodotti')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('prodotti', $args);
}

add_action('init', 'create_prodotti_type', 1);

/**
 *  Tassonomia personalizzata per i Prodotti: Categoria Prodotto e Tag prodotto
 */
function create_prodotti_taxonomy() {
    register_taxonomy('categoria-prodotto', array('prodotti'), array(
        'hierarchical' => true,
        'label' => 'Categorie prodotto',
        'singular_label' => 'Categoria prodotto',
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capabilities' => array(
            'manage_terms' => 'manage_categories',
            'edit_terms' => 'manage_categories',
            'delete_terms' => 'manage_categories',
            'assign_terms' => 'edit_posts',
        ),
    ));

    $labels = array(
        'name' => __('Tag prodotto'),
        'singular_name' => __('Tag prodotto'),
        'search_items' => __('Cerca tag prodotto'),
        'popular_items' => __('Tag prodotto piu popolari'),
        'all_items' => __('Tutti i tag'),
        'edit_item' => __('Modifica tag prodotto'),
        'update_item' => __('Aggiorna tag prodotto'),
        'add_new_item' => __('Aggiungi nuovo tag prodotto'),
        'new_item_name' => __('Nuovo tag prodotto'),
        'separate_items_with_commas' => __('Separa i tag con delle virgole'),
        'add_or_remove_items' => __('Aggiungi o rimuovi tag'),
        'choose_from_most_used' => __('Scegli un tag fra quelli più utilizzati'),
        'menu_name' => __('Tag Prodotti'),
    );

    register_taxonomy('tag-prodotto', array('prodotti'), array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => true,
    ));
}

add_action('init', 'create_prodotti_taxonomy', 2);

/**
 * Create a dropdown menu on admin page, with all custom taxonomy.
 * @global object $wp_query
 */
function create_taxonomy_admin_filter() {
    global $wp_query;

    $screen = get_current_screen();
    $taxonomy = get_taxonomy('categoria-prodotto');

    // Check if current edit screen is the current post type screen,
    // and check if custom taxonomy is hierarchical before proceed to draw
    // the dropdown list.
    if ($screen->post_type == 'prodotti') {
        if ($taxonomy->hierarchical == 1) {
            wp_dropdown_categories(array(
                'show_option_all' => $taxonomy->label,
                'taxonomy' => $taxonomy->name,
                'name' => $taxonomy->name,
                'orderby' => 'name',
                'selected' => ( isset($wp_query->query['term']) ? $wp_query->query['term'] : '' ),
                'hierarchical' => true,
                'depth' => 3,
                'show_count' => true,
                'hide_empty' => true,
            ));
        }
    }
}

add_action('restrict_manage_posts', 'create_taxonomy_admin_filter');

/**
 * Filter custom post type on admin page menu,
 * based on choosed custom taxonomy.
 * 
 * @param type $query
 */
function perform_taxonomies_filtering($query) {
    $query_vars = &$query->query_vars;
    
    $taxonomy = get_taxonomy('categoria-prodotto');

    if ($taxonomy->hierarchical == 1) {
        if (isset($query_vars[$taxonomy->name]) && is_numeric($query_vars[$taxonomy->name])) {

            //Set query vars with the slug of filtered taxonomies.
            $term = get_term_by('id', $query_vars[$taxonomy->name], $taxonomy->name);

            $query_vars[$taxonomy->name] = $term->slug;
        }
    }
}

add_filter('parse_query', 'perform_taxonomies_filtering');

/**
 *  Custom Post Types: Brand. Nessuna tassonomia personalizzata
 */
function create_brand_type() {
    $labels = array(
        'name' => _x('Brand', 'brand'),
        'singular_name' => _x('Brand', 'brand'),
        'add_new' => _x('Aggiungi nuovo', 'brand'),
        'add_new_item' => __('Aggiungi nuovo brand'),
        'edit_item' => __('Modifica brand'),
        'new_item' => __('Nuovo brand'),
        'all_items' => __('Tutti i brand'),
        'view_item' => __('Visualizza brand'),
        'search_items' => __('Cerca brand'),
        'not_found' => __('Nessun brand trovato'),
        'not_found_in_trash' => __('Nessun brand nel cestino'),
        'menu_name' => __('Brand')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'show_in_admin_bar' => true,
        'menu_position' => 8,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('brand', $args);
}

add_action('init', 'create_brand_type', 3);


/**
 * Thumbnail
 */
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}


/**
 * Sidebar del blog.
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'id' => 'sidebar-articoli'
        , 'name' => 'Sidebar articoli'
        , 'before_widget' => '<article>'
        , 'after_widget' => '</article>'
        , 'before_title' => '<h3>'
        , 'after_title' => '</h3>'
    ));
}


/**
 * Sidebar Prodotti.
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'id' => 'sidebar-prodotti'
        , 'name' => 'Sidebar Prodoti'
        , 'before_widget' => '<article>'
        , 'after_widget' => '</article>'
        , 'before_title' => '<h3>'
        , 'after_title' => '</h3>'
    ));
}

/**
 * Sidebar Footer.
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'id' => 'sidebar-footer'
        , 'name' => 'Sidebar Footer'
        , 'before_widget' => '<article>'
        , 'after_widget' => '</article>'
        , 'before_title' => '<h3>'
        , 'after_title' => '</h3>'
    ));
}

/**
 * Ritorna il permalink di una pagina fornendo lo slug della stessa.
 * 
 * @param string $slug
 * @return string
 */
function get_page_by_slug($slug) {
    $page = get_page_by_path($slug);

    if ($page) {
        return get_permalink($page->ID);
    } else {
        return '#';
    }
}

/**
 * Fornito l'id di un post e la tassonomia la funzione ritorna il term padre dell'elemento.
 * 
 * @param string $id
 * @param string $taxonomy
 * @return array
 */
function get_parent_term_by_post_id($id, $taxonomy, $wp_query) {
    $terms = get_the_terms($id, $taxonomy);

    foreach ($terms as $current_term) {

        if ($current_term->parent == 0) {
            $parent_term = $current_term;
        }
    }
    return $parent_term;
}

/**
 * Fornito lo slug di un post e la tassonomia la funzione ritorna il term padre dell'elemento.
 * 
 * @param string $slug
 * @param string $taxonomy
 * @return array
 */
function get_parent_term_by_slug($slug, $taxonomy) {
    $term = get_term_by('slug', $slug, $taxonomy);

    while ($term->parent != 0) {
        $term = get_term_by('id', $term->parent, $taxonomy);
    }

    return $term;
}

/**
 * Registra un menu custom.
 */
function register_menu() {
  register_nav_menu('menu-custom', __( 'Menu Custom' ));
}

add_action( 'init', 'register_menu' );