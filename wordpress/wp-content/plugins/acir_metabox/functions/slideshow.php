<?php
/**
 * Aggiugne metabox al Custom Post Type SlideShow
 */
function save_link_slideshow($slideshow_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    if (!current_user_can('edit_post'))
        return;

    if (isset($_POST['link_slideshow']) && $_POST['link_slideshow'] != '') {
        update_post_meta($slideshow_id, 'link_slideshow', $_POST['link_slideshow']);
    }
}

function link_slideshow_metabox_callback($slideshow) {
    $value = get_post_meta($slideshow->ID, 'link_slideshow', true);

    $html = '<label for="link_slideshow-metabox-id">Link Slideshow</label><br/>';
    $html.= '<input type="url" id="link_slideshow-metabox-id" name="link_slideshow"  value="' . $value . '" style="width: 100%;"/>';

    echo $html;
}

function create_link_slideshow_metabox() {
    add_meta_box(
            'link_slideshow-metabox-id', 'Link Slideshow', 'link_slideshow_metabox_callback', 'slideshow', 'side', 'high'
    );
}

add_action('admin_init', 'create_link_slideshow_metabox');

add_action('save_post', 'save_link_slideshow');
?>
