
<?php $recent = new WP_Query(array( 'pagename' => 'quienes-somos-procesos' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <section class="procs" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" >
      <?php get_template_part('page','quienes-somos-divulgacion' );?>
      <?php get_template_part('page','quienes-somos-aseguramiento' );?>
      <?php get_template_part('page','quienes-somos-demanda' );?>
      <?php get_template_part('page','quienes-somos-ganancia' );?>
  </section>
<?php endwhile; ?>
