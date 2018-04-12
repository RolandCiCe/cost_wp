<?php get_header(); ?>

  <?php while(have_posts()): the_post(); ?>
      <div class="contenido-hero single-header single-aseg-title">
        <?php the_title('<h1>','</h1>'); ?>
      </div>
        <a href="/cost_wp/index.php/dashboard-aseguramiento-hidraulica/" class="no-text-transform">ANTERIOR</a>
      <div class="aseg-percentages">
        <div class="percent-item">
          <span class="val val-1"><?php the_field('porc_informacion_proactiva'); ?> %</span>
          <p>INFORMACIÓN PROACTIVA</p>
        </div>
        <div class="percent-item">
          <span class="val val-2"><?php the_field('porc_informacion_reactiva'); ?> %</span>
          <p>INFORMACIÓN REACTIVA</p>
        </div>
        <div class="percent-item">
          <span class="val val-3"><?php the_field('porc_informacion_no_divulgada'); ?> %</span>
          <p>INFORMACIÓN NO DIVULGADA</p>
        </div>
      </div>

      <div class="aseg-img">
        <?php
            the_post_thumbnail();
        ?>
      </div>

      <div class="container aseg-content-container">
        <div class="container aseg-content">
          <h1 class="text-center"><?php the_field('categoria_proyecto'); ?></h1><br />

          <span class="text-justified"><?php the_content(); ?></span><br />
        </div>
      </div>

      <!-- <div>
        <div class="texto-hero">

        </div>

        <div class="">
          <div class="">
            <p><?php //the_field('categoria_proyecto'); ?> </p>
          </div>
        </div>

      </div> -->

  <?php endwhile; ?>

<?php get_footer();?>
