<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<section>
  <div class="single-header aseg text-justified simple-padding" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <?php the_content(); ?>

  </div>
  <br />

  <div class="simple-padding">
    <h2 class="text-center"><?php echo the_field('titulo_1'); ?></h2>

    <div class="small-ruler"><div></div></div><br />

    <img style="width: 100%!important;" src="<?php echo the_field('imagen_aseguramiento_fases'); ?>" alt="" />
  </div>

  <br />

  <div class="simple-padding">
    <h2 class="text-center"><?php echo the_field('titulo_2'); ?></h2>

    <div class="small-ruler"><div></div></div><br />

    <div class="aseg-links simple-padding">
      <div class="aseg-link"><a class="aseg-bullet bg-success" href="<?php echo get_home_url().'/index.php/dashboard-aseguramiento-transporte' ?>"><img src="<?php echo the_field('imagen_aseguramiento_transporte'); ?>"></a><span class="text-center"><?php echo the_field('titulo_transporte'); ?></span></div>
      <div class="aseg-link"><a class="aseg-bullet" href="<?php echo get_home_url().'/index.php/dashboard-aseguramiento-energetica' ?>"><img src="<?php echo the_field('imagen_aseguramiento_energetica'); ?>"></a><span class="text-center"><?php echo the_field('titulo_energetica'); ?></span></div>
      <div class="aseg-link"><a class="aseg-bullet bg-danger" href="<?php echo get_home_url().'/index.php/dashboard-aseguramiento-hidraulica' ?>"><img src="<?php echo the_field('imagen_aseguramiento_hidraulica'); ?>"></a><span class="text-center"><?php echo the_field('titulo_hidraulica'); ?></span></div>
      <div class="aseg-link"><a class="aseg-bullet bg-primary" href="<?php echo get_home_url().'/index.php/dashboard-aseguramiento-telecomunicaciones' ?>"><img src="<?php echo the_field('imagen_aseguramiento_telecomunicacion'); ?>"></a><span class="text-center"><?php echo the_field('titulo_telecomunicacion'); ?></span></div>
      <div class="aseg-link"><a class="aseg-bullet bg-warning" href="<?php echo get_home_url().'/index.php/dashboard-aseguramiento-desechos' ?>"><img src="<?php echo the_field('imagen_aseguramiento_desechos'); ?>"></a><span class="text-center"><?php echo the_field('titulo_desechos'); ?></span></div>
      <div class="aseg-link"><a class="aseg-bullet" href="<?php echo get_home_url().'/index.php/dashboard-aseguramiento-edificacion' ?>"><img src="<?php echo the_field('imagen_aseguramiento_edificacion'); ?>"></a><span class="text-center"><?php echo the_field('titulo_edificacion'); ?></span></div>
    </div>
</div>
<br />
</section>
  <?php endwhile; ?>
<?php get_footer();?>
