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
                if(is_page()){
                    get_template_part('template-parts/page', 'page');
                }
            }
        }
    ?>
   
</div>

<?php  get_template_part('template-parts/pagination', 'pagination'); ?>

<?php get_footer(); ?>
