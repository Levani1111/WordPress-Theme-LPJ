<footer>
    <div class="container-fluid py-5">
        <div class="row">
        <div class="col" style="min-width:200px"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
        <div class="col" style="min-width:200px"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
            <div class="col" style="min-width:200px">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'container' => 'div',
                        'container_class' => 'container',
                        'container_id' => '',
                        'menu_class' => 'navbar-nav mr-auto',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 0,
                        'walker' => '',
                    ));
                ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>