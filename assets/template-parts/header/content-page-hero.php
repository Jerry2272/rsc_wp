<div  class="container-fluid text-hero"   style="background-image:linear-gradient(rgba(1, 64, 59, 0), rgba(1, 64, 59, 1)), url('<?php echo get_post_meta($post->ID, 'image-link', true); ?>');   background-position: top bottom;
  background-size: cover; bacground-repeat: no-repeat;" >
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
        <?php the_title( '<h1 class="text-white text-uppercase">', '</h1>' ); ?>
        </div>
    </div>
  </div>