<?php get_header(); ?>

  <?php while(have_posts()): the_post(); ?>
      <div class="contenido-hero single-header">
        <div class="texto-hero">
          <?php the_title('<h1>','</h1>'); ?>
        </div>
        <div class="">
          <div class="">
            <p><?php the_field('porc_informacion_proactiva'); ?> %</p>
          </div>
          <div class="">
            <p>INFORMACION PROACTIVA</p>
          </div>
        </div>
        <div class="">
          <div class="">
            <p><?php the_field('porc_informacion_reactiva'); ?> %</p>
          </div>
          <div class="">
            <p>INFORMACION REACTIVA</p>
          </div>
        </div>
        <div class="">
          <div class="">
            <p><?php the_field('porc_informacion_no_divulgada'); ?> %</p>
          </div>
          <div class="">
            <p>INFORMACION NO DIVULGADA</p>
          </div>
        </div>
        <div class="">
          <div class="">
            <p><?php the_field('categoria_proyecto'); ?> </p>
          </div>
        </div>
        <div class="">
          <?php
              the_post_thumbnail();
          ?>
        </div>
      </div>
    <div class="principal contenedor-pdf">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>

<?php get_footer();?>
