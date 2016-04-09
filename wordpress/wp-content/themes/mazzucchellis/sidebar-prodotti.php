<aside id="sidebar-small" class="four columns">
    <article>
        <article>
            <p>
              <?php echo category_description(); ?> 
            </p>
        </article>
        <header>
            <h3>Categorie</h3>
        </header>
        <ul>
            <?php wp_list_categories('taxonomy=categoria-prodotto&title_li='); ?>
        </ul>

        <?php
        if (!function_exists('dynamic_sidebar')
                || !dynamic_sidebar('sidebar-prodotti')) :

        endif;
        ?>
    </article>
</aside>