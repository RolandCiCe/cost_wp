
<?php $recent = new WP_Query(array( 'pagename' => 'grupo-multisectorial-privado' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <div class="seccion-titulo bg-primary">
    <h2><b><?php echo the_field('titulo_parte_1'); ?></b><br /><span style="font-size: 60%;"><?php echo the_field('titulo_parte_2'); ?></span></h2>
  </div>
  <div class="seccion-img"><img class="img-obj" src="<?php echo the_field('imagen_1'); ?>" alt="" /></div>
  <?php the_content(); ?>
<?php endwhile; ?>
