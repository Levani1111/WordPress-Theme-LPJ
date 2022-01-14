<?php 
 $slider_active = get_theme_mod('lpj_slider_activete', 1);
?>
<?php if($slider_active):?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <?php 
       $img = get_template_directory_uri(). '/assets/images/01-01.jpeg';
        if(get_theme_mod('lpj_slider_imge_1','') != ''){
            $img = get_theme_mod('lpj_slider_imge_1','');
        }
      ?>
      <img src="<?= $img ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <?php 
         $slider_header_text = get_theme_mod('lpj_slider_header_content_1', '');
         $slider_content_text = get_theme_mod('lpj_slider_header_text_1', '');
        ?>
        <h5><?=$slider_header_text?></h5>
        <p><?=$slider_content_text?></p>
      </div>
    </div>
    <div class="carousel-item">
    <?php 
       $img = get_template_directory_uri(). '/assets/images/01-01.jpeg';
        if(get_theme_mod('lpj_slider_imge_2','') != ''){
            $img = get_theme_mod('lpj_slider_imge_2','');
        }
      ?>
      <img src="<?= $img ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <?php 
         $slider_header_text = get_theme_mod('lpj_slider_header_content_2', '');
         $slider_content_text = get_theme_mod('lpj_slider_header_text_2', '');
        ?>
        <h5><?=$slider_header_text?></h5>
        <p><?=$slider_content_text?></p>
      </div>
    </div>
    <div class="carousel-item">
    <?php 
       $img = get_template_directory_uri(). '/assets/images/01-01.jpeg';
        if(get_theme_mod('lpj_slider_imge_3','') != ''){
            $img = get_theme_mod('lpj_slider_imge_3','');
        }
      ?>
      <img src="<?= $img ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <?php 
         $slider_header_text = get_theme_mod('lpj_slider_header_content_3', '');
         $slider_content_text = get_theme_mod( 'lpj_slider_header_text_3', '');
        ?>
        <h5><?=$slider_header_text?></h5>
        <p><?=$slider_content_text?></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php endif; ?>