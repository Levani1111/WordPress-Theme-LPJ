<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <?php 
            if ( has_custom_logo() ) {
                the_custom_logo();
            }else { ?>
                <a class="navbar-brand site-title" href="<?= get_home_url();?>">
                     <?php bloginfo('name')?>
                </a>
              <?php 
            }
        ?>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-4" id="navbarSupportedContent">
        <?php 
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => '',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => '',
                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0"',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => new header_menu_walker(),
            ));
        ?>
            <form class="d-flex" action="<?= get_home_url();?>">
                <input  name="s" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

