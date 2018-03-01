<form class="formulario-contacto" method="post">
  <h2>CONTÁCTANOS</h2>
  <div class="campo">
    <input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
  </div>
  <div class="campo">
    <input type="email" name="correo" placeholder="Correo" class="form-control" required>
  </div>
  <div class="campo">
    <input type="text" name="asunto" placeholder="Asunto" class="form-control" class="form-control" required>
  </div>
  <div class="campo">
    <textarea rows="6" name="mensaje" placeholder="Mensaje" class="form-control" required></textarea>
  </div>
  <input type="submit" name="enviar" class="btn btn-primary">
  <input type="hidden" name="oculto" value="1">
</form>