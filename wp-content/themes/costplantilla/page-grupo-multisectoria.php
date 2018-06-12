<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<div class="gms-hero hero max-bg-img-width" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
  <div class="contenido-hero">
    <h2><b><?php echo the_field('titulo_parte_1'); ?></b> <?php echo the_field('titulo_parte_2'); ?></h2>
    <?php the_content(); ?>
  </div>
</div>

<section class="objetivo">
  <!--<div class="obj-desc">
    <h1 class=""><b><span class="text-dark">OBJETIVO DEL</span><br /></b><span class="text-primary">PROGRAMA</span></h1>
    <br />
    <p class="text-justified">Es incrementar el valor de la infraestructura pública en todo el mundo, al aumentar la transparencia con la que se ejecutan los proyectos, además de fomentar la demanda ciudadana de rendición de cuentas. </p>
  </div>-->
  <div class="obj-desc">
    <?php get_template_part('page','grupo-multisectorial-importancia' );?>
  </div>

  <div class="obj-secciones text-justified">
    <div class="obj-seccion">
      <?php get_template_part('page','grupo-multisectorial-publico' );?>
    </div>

    <div class="obj-seccion">
      <?php get_template_part('page','grupo-multisectorial-privado' );?>
    </div>

    <div class="obj-seccion">
      <?php get_template_part('page','grupo-multisectorial-sociedad-civil' );?>
    </div>
    <div class="obj-seccion">
      <?php get_template_part('page','grupo-multisectorial-academico' );?>
    </div>
</section>
<?php get_template_part('page','grupo-multisectorial-consejo-directivo' );?>
<?php endwhile; ?>
<?php get_footer();?>
