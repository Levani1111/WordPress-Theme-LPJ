<?php get_header(); 
    get_template_part('template-parts/nav', 'nav');
    
    if(is_front_page()){
        get_template_part('template-parts/slider', 'slider');
    }
?>
<div class="container-fluid">
    <div class="row">
        <div class="col p-4 card-group justify-content-center">
            <?php
                if(have_posts()){
                    while(have_posts()) {
                        the_post();
                        get_template_part('template-parts/post', 'post');
                    }
                }
            ?>
        
        </div>
        <div class="col-md-3 bg-light p-4">
             <?php dynamic_sidebar( 'sidebar-0' ); ?>
        </div>
    </div>
</div>

<?php  get_template_part('template-parts/pagination', 'pagination'); ?>

<?php get_footer(); ?>
