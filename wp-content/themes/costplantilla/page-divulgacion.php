<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<section class="qs-titulo divulgacion" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
  <div class="qs-div">
    <div class="negro">
      <img src="<?php echo the_field('imagen_extra_1'); ?>" alt="" />
    </div> <br />
    <div class="texto-hero">
<<<<<<< HEAD
      <?php the_title('<h2>','</h2>'); ?>
    </div><br />
    <?php the_content(); ?>
=======
      <h2>Divulgación</h2>
    </div> <br />
    <div class="">
      <p class="rojo">La divulgación de la información, tiene como fin garantizar al público que el propósito, alcance, costos y ejecución de los proyectos de construcción se ha realizado de una forma transparente, y que los fondos obtenidos por medio del pago de sus impuestos se han administrado de manera acertada, generando la confianza de los usuarios en la institución encargada. </p>
      <br />
      <p class="rojo">La información de los proyectos debe ser divulgada de forma “proactiva”, es decir, que las Instituciones propietarias de proyectos deben revelar toda la información de las diferentes etapas del proyecto; a través de un medio público abierto y accesible a todos los actores interesados y sin ser solicitada.</p>
    </div>
>>>>>>> 669df89db48143a230aa1d1a8b3024ecb48e6b02
  </div>
</section>
  <?php endwhile; ?>
<?php get_footer();?>
