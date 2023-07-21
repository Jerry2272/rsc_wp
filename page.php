<?php
/**
 * Template for dispalying all the pages.
 */
get_header();
?>
        <?php
        while ( have_posts() ) :
            the_post();
           
        endwhile;
        ?>

<div class="container div_sections single-page">
      <div class="row justify-content-center">
        <?php
          while ( have_posts() ) :
              the_post();
              get_template_part( 'assets/template-parts/page/content', 'page' );
          endwhile;
          ?>
        </div>
  </div>


<?php
get_footer(); 