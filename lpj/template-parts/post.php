<div class="card m-4 shadow border text-center" style="max-width: 280px ;min-width: 280px;">
     <?php the_post_thumbnail('post-priview');?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title();?></h5>
        <p class="card-text"><?= substr(get_the_excerpt(),0,50);?>...</p>
        <a href="<?php the_permalink();?>" class="btn btn-primary">Read more</a>
    </div>
</div>

