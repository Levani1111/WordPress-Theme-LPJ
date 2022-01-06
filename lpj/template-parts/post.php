<div class="card m-4 shadow border" style="max-width: 18rem;min-width: 18rem;">
     <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php the_title();?></h5>
        <p class="card-text"><?= substr(get_the_excerpt(),0,50);?>...</p>
        <a href="<?php the_permalink();?>" class="btn btn-primary">Read more</a>
    </div>
</div>