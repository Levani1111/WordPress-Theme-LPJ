<div class="card  border-0 text-center">
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