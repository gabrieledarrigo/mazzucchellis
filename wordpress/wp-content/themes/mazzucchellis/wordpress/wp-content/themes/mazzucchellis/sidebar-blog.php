<aside id="sidebar" class="six columns offset-by-one">
    <section id="sidebar-content">
        <?php
        if (!function_exists('dynamic_sidebar')
                || !dynamic_sidebar('sidebar-blog')) :

        endif;
        ?>
    </section>
</aside>