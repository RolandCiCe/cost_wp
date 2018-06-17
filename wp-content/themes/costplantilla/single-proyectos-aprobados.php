<?php get_header(); ?>

  <?php while(have_posts()): the_post(); ?>

    <div class="contenido-hero single-header proyectos-aprobados">
        <div class="texto-hero">
          <?php // the_title('<h1>','</h1>'); ?>
        </div>
      </div><br />
<a href="#/" class="no-text-transform" onclick="window.history.back();"><span class="fa fa-arrow-left"></span> Volver a página anterior</a>
    <div class="principal contenedor-pdf">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>

<?php get_footer();?>
