<?php get_header(); 
    get_template_part('template-parts/nav', 'nav');
    
?>
<div class="container">
    <div class="card border-0 m-4">
        <?php the_post_thumbnail('post-priview');?>
        <div class="card-body">
            <h4 class="card-title"><?php the_title();?></h4>
            <p class="card-text"><?php the_content();?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>