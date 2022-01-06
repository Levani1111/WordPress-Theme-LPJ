<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
            <?php 
                wp_body_open();
                    get_template_part('template-parts/nav', 'nav');
                    get_template_part('template-parts/slider', 'slider');
                    
            ?>
            <div class="p-4 card-group justify-content-center">
                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            get_template_part('template-parts/post', 'post');
                        }
                    }
                ?>
            </div>
    <?php wp_footer();?>   

</body>
</html>