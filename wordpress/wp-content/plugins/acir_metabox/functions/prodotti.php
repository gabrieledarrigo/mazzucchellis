<?php
/**
 * Custom metabox per i Prodotti
 */
function check_codice_prodotto($codice, $post_id) {
    global $wpdb;

    $sql = "SELECT post_id, meta_value"
            . " FROM mazzucchelli_wp.wp_postmeta"
            . " WHERE meta_key = 'codice_prodotto'"
            . " AND post_id !=" . $post_id
            . " AND meta_value != ''"
            . " AND meta_value = " . $codice;

    $codice_podotto = $wpdb->get_results($sql);

    if (count($codice_podotto) > 0) {
        $codice = 'Il codice è già presente nell\'archivio.';

        return $codice;
    } else {
        return $codice;
    }
}

function save_codice_prodotto($prodotto_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    if (!current_user_can('edit_post'))
        return;

    if (isset($_POST['codice_prodotto']) && $_POST['codice_prodotto'] != '') {
        $codice_prodotto = check_codice_prodotto($_POST['codice_prodotto'], $prodotto_id);
        update_post_meta($prodotto_id, 'codice_prodotto', $codice_prodotto);
    }
}

function prodotto_metabox_callback($prodotto) {

    $value = get_post_meta($prodotto->ID, 'codice_prodotto', true);

    $html = '<label for="codice_prodotto">Codice Prodotto:</label><br/>';
    $html.= '<input type="text" id="prodotto-metabox-id" name="codice_prodotto"  value="' . $value . '" style="width: 100%;"/>';

    echo $html;
}

function create_codice_prodotto_metabox() {
    add_meta_box(
            'prodotto-metabox-id', 'Codice Prodotto', 'prodotto_metabox_callback', 'prodotti', 'side', 'high'
    );
}

add_action('admin_init', 'create_codice_prodotto_metabox');

add_action('save_post', 'save_codice_prodotto');

/**
 * Registra, se presente, il link della pagina shop dello specifico prodotto.
 */
function save_link_shop($prodotto_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    if (!current_user_can('edit_post'))
        return;

    if (isset($_POST['link_shop']) && $_POST['link_shop'] != '') {
        update_post_meta($prodotto_id, 'link_shop', $_POST['link_shop']);
    }
}

function shop_metabox_callback($prodotto) {

    $value = get_post_meta($prodotto->ID, 'link_shop', true);

    $html = '<label for="shop-metabox-id">Link Shop</label><br/>';
    $html.= '<input type="url" id="shop-metabox-id" name="link_shop"  value="' . $value . '" style="width: 100%;"/>';

    echo $html;
}

function create_shop_metabox() {
    add_meta_box(
        'shop-metabox-id', 'Link Shop', 'shop_metabox_callback', 'prodotti', 'side', 'high'
    );
}

add_action('admin_init', 'create_shop_metabox');

add_action('save_post', 'save_link_shop');
?>
