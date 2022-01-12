<div class="text-center justify-content-center">
<div style="text-align:center">
    <?php
       $post_id = get_the_ID();
    
        $views = (int)get_post_meta($post_id, 'views', true);
        $views = $views = '' ? 0 : $views;
        update_post_meta($post_id, 'views', $views + 1);
        $views = get_post_meta($post_id, 'views', true);
        echo "Post Views: <i class='fa fa-eye'></i> " . $views . "<br></br>";
    
    ?>
    <?php the_post_thumbnail('post-thumbnail', [
            'class' => 'card-img-top',
            'alt' => 'post-thumbnail'
            
        ]);?>

    <div class="card-body">
        <h5 class="card-title"><?php the_title();?></h5>
        <p class="card-text"><?= substr(get_the_excerpt(),0,50);?>...</p>
        <a href="<?php the_permalink();?>" class="btn btn-primary">Read more</a>
    </div>
</div>
</div>