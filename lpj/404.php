<?php get_header(); 
    get_template_part('template-parts/nav', 'nav');?>
  
<div class="p-4 py-5 justify-content-center mx-auto">
    <h4 class="text-center">Sorry, we couldn't find the page you were looking for.</h4>
    <h4 class="text-center">Try to search for something below</h4>
    <div class="justify-content-center mx-auto py-2" style="max-width: 600px;">
        <form class="d-flex center" action="<?= get_home_url();?>">
            <input autofocus name="s" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</div>


<?php get_footer(); ?>
