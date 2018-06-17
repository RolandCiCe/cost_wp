<?php $recent = new WP_Query(array( 'pagename' => 'inicio-contacto' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <section class="contacto bg-light" style="background-image: url(<?php echo the_field('imagen_1'); ?>), url(<?php echo the_field('imagen_2'); ?>);">
    <div class="row">
      <div class="col-xs-1 col-md-6">
        <div class="container"><?php get_template_part( 'templates/formulario', 'contacto' );?></div>
      </div>
      <?php get_template_part('page','inicio-suscripcion' );?>      
    </div>
  </section>
<?php endwhile; ?>
