<?php

/**
 * Checkbox per aggiungere il prodotto alla slideshow.
 */
//function save_slideshow_value($prodotto_id) {
//    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
//        return;
//
//    if (!current_user_can('edit_post'))
//        return;
//
//    if (isset($_POST['slideshow_value']) && $_POST['slideshow_value'] != '') {
//        update_post_meta($prodotto_id, 'slideshow_value', $_POST['slideshow_value']);
//    }
//}
//
//function slideshow_metabox_callback($prodotto) {
//    $value = get_post_meta($prodotto->ID, 'slideshow_value', true);
//
//    $html = '<label for="slideshow-metabox-id">Pubblica l\'immagine in una Slideshow</label><br/>';
//    $html.= '<input type="hidden" name="slideshow_value"  value="0"/>';
//    $html.= '<input type="checkbox" id="ebay-metabox-id" name="slideshow_value"  value="1"';
//    $value == 1 ? $html.= 'checked="checked"' : $html.= '';
//    $html.= '/>';
//
//    echo $html;
//}
//
//function create_slideshow_metabox() {
//    add_meta_box(
//            'slideshow-metabox-id', 'Slideshow', 'slideshow_metabox_callback', 'prodotti', 'side', 'high'
//    );
//}
//
//add_action('admin_init', 'create_slideshow_metabox');
//
//add_action('save_post', 'save_slideshow_value');
?>
