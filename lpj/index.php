<?php get_header(); 
            get_template_part('template-parts/nav', 'nav');
            
            if(is_front_page()){
                get_template_part('template-parts/slider', 'slider');
            }
    ?>
    <div class="p-4 card-group justify-content-center">
        <?php
            if(have_posts()){
                while(have_posts()) {
                    the_post();
                    
                    if(is_single()) {
                        get_template_part('template-parts/single-post', 'single-post');
                    } else {
                            get_template_part('template-parts/post', 'post');
                    }
                }
            }
        ?>
    </div>
<?php get_footer(); ?>