<?php get_header(); ?>

<br />

<h1 class="text-primary">Resultados de la búsqueda:</h1><br />


<div class="container-fluid"><div class="row">
      <?php
        if( have_posts()) :
          while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'content', 'search' )?>
      <?php endwhile;
    endif;

       ?>
</div></div>



<?php get_footer(); ?>
