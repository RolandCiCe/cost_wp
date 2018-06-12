<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<div class="contenido-hero single-header empleos-cv" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
  </div>
  <section class="contacto bg-light">
    <div class="row row-centered">
      <div class="col-xs-1 col-md-6">
        <div class="container">
          <form class="formulario-contacto" method="post" action="<?php get_template_directory_uri().'envio.php'?>">
            <h2>ENVIAR CURRICULUM</h2>
            <div class="campo">
              <input type="text" id = "nombre" name="nombre" placeholder="Nombre" class="form-control" required>
            </div>
            <div class="campo">
              <input type="email" id = "email" name="correo" placeholder="Correo" class="form-control" required>
            </div>
            <div class="campo">
              <input type="text" id = "asunto" name="asunto" placeholder="Asunto" class="form-control" class="form-control" required>
            </div>
            <div class="campo">
              <textarea rows="6" id = "mensaje" name="mensaje" placeholder="Mensaje" class="form-control" required></textarea>
            </div>
            <div class="campo">
              <input type="file" name="archivo" placeholder="Adjunte un archivo" class="form-control" required>
            </div>
            <input type="submit" id = "submit" name="enviar" value = "Enviar" class="btn btn-primary">
            <input type="hidden" name="oculto" value="1">
          </form>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; ?>
<?php get_footer();?>
