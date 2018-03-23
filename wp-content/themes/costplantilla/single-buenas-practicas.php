<?php get_header(); ?>

  <?php while(have_posts()): the_post(); ?>
      <div class="contenido-hero single-header buenas-practicas">
        <div class="texto-hero">
          <?php //the_title('<h1>','</h1>'); ?>
        </div>
      </div>
      <div class="">
        <img src="<?php echo get_template_directory_uri().'/img/buenas_practicas/buenas_practicas.jpg' ;?>">
        <img src="<?php echo get_template_directory_uri().'/img/buenas_practicas/iconos_buenas_practicas.png' ;?>">
        <p>BUENAS PRACTICAS <b>CoST</b></p>
      </div>
    <div class="principal contenedor-pdf">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>

<?php get_footer();?>
