<div class="card m-2 border border-primary text-center" style="max-width: 270px ;min-width: 270px;">
    <div class="row">
        <div>
            <?php the_post_thumbnail('post-priview-small');?>
        </div>
        <div class="card-body">
            <h6 class="card-title text-primary"><?php the_title();?></h6>
            <a href="<?php the_permalink();?>" class="btn btn-outline-primary btn-sm">Read more</a>
        </div>
    </div>
</div>
