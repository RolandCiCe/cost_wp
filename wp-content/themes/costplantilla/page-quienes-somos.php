<?php get_header(); ?>
<?php $recent = new WP_Query(array( 'pagename' => 'quienes-somos' )); while($recent->have_posts()) : $recent->the_post(); ?>
  <?php get_template_part('page','quienes-somos-encabezado' );?>
<section class="hist">
  <?php get_template_part('page','quienes-somos-historia' );?>
</section>
<section>
  <?php get_template_part('page','quienes-somos-organigrama' );?>
</section>
<br />
  <?php get_template_part('page','quienes-somos-procesos' );?>
  <?php get_template_part('page','quienes-somos-lema' );?>
<?php endwhile; ?>
<?php get_footer();?>
