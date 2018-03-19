<form class="formulario-contacto" method="post" action="<?php get_template_directory_uri().'contactos.php'?>">
  <h2>CONTÁCTANOS</h2>
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
  <input type="submit" id = "submit" name="enviar" value = "Enviar" class="btn btn-primary">
  <input type="hidden" name="oculto" value="1">
</form>
