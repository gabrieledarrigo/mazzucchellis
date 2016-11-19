<section class="twelve columns offset-by-four">
    <div id="nav">
        <?php
        $total_pages = $wp_query->max_num_pages;

        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));
            echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => '/page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => 'Pagina precedente',
                'next_text' => 'Pagina successiva'
            ));
        }
        ?>
    </div>
</section>