<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die('Please do not load this page directly. Thanks!');
if (post_password_required()) {
    ?>

    <p class="nocomments"><?php _e('Questo articolo è protetto da password; Inserisci la password per leggerlo'); ?></p>
    <?php
    return;
}
?>

<div id="comments">
    <h3><?php comments_number('No comment', '1 comment', '% comments'); ?></h3>

    <?php if (have_comments()) : ?> 

        <ul class="commentlist">
            <?php wp_list_comments('avatar_size=64&type=comment'); ?>
        </ul>

        <?php if ($wp_query->max_num_comment_pages > 1) : ?>
            <ul class="commentPagination">
                <li class="old"><?php previous_comments_link('&laquo; Commenti Precedenti'); ?> </li>
                <li class="new"><?php next_comments_link('Commenti Successivi &raquo;'); ?></li>
                <li class="clear"></li>
            </ul>

            <br class="clear"/>

        <?php endif; ?>
    <?php endif; ?>

</div>

<?php if (comments_open()) : ?>

    <div id="response">
        <h3>Lasciaci un commento:</h3>

        <form id="commentform" method="post"  action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">

            <label for="author">Nome:</label><br/>
            <input type="text" id="author" name="author" value="<?php echo $comment_author; ?>" required="required"/><br/>

            <label for="email">Email:</label><br/>
            <input type="email" id="email" name="email" value="<?php echo $comment_author_email; ?>" required="required"/><br/>

            <label for="comment">Messaggio:</label><br/>
            <textarea id="comment" name="comment" rows="" cols="" required="required"></textarea><br/>

            <button type="submit" class="commentsubmit">Invia il tuo commento!</button>

            <?php comment_id_fields(); ?>
            <?php do_action('comment_form', $post->ID); ?>


        </form>

        <p class="cancel"><?php cancel_comment_reply_link('Cancella il messaggio'); ?> </p>

    </div> 
<?php else : ?>
    <h3>I commenti a questo articolo sono chiusi</h3>
<?php endif; ?>






