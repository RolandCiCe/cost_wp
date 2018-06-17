
<?php $recent = new WP_Query(array( 'pagename' => 'quienes-somos-encabezado' )); while($recent->have_posts()) : $recent->the_post(); ?>

<section class="quienes" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
  <div class="">
    <img src="<?php echo the_field('imagen_1'); ?>" alt="" />
  </div>

  <div class="texto-hero">
    <h1><?php echo the_field('titulo_1'); ?> <b><?php echo the_field('titulo_2'); ?></b></h1>
  </div>

  <div class="quienes-text text-justified">
    <br />

      <?php the_content(); ?>
  </div>
</section>


<?php endwhile; ?>
