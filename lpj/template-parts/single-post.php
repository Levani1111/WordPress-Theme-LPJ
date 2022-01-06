<div class="card m-4 shadow border">
     <?php the_post_thumbnail('post-thumbnail');?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title();?></h5>
        <p class="card-text"><?= substr(get_the_excerpt(),0,50);?>...</p>
        <a href="<?php the_permalink();?>" class="btn btn-primary">Read more</a>
    </div>
</div>