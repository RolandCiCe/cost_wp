<form class="formulario-contacto" method="post" action="<?php get_template_directory_uri().'suscripcion.php'?>">
  <h2 class="text-light">SUSCRIPCIÓN</h2>
  <div class="campo">
    <input type="email" id = "email" name="correo" placeholder="Correo" class="form-control" required>
  </div>
  <input type="submit" id = "suscribe" name="suscribe" value = "Suscribirse" class="btn btn-primary">
  <input type="hidden" name="oculto" value="1">
</form>