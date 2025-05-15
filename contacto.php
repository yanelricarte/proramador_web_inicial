<?php include("header.php"); ?>
<section class="contacto__box">
  <h1> Contacto </h1>
  <div>
    <form action="enviar_consulta.php" method="post" class="form">
      <label for="nombre"> Nombre </label>
      <input type="text" name="nombre" class="contacto__input">
      <label for="apellido"> Apellido </label>
      <input type="text" name="apellido" class="contacto__input">
      <label for="edad"> Edad </label>
      <input type="number" name="edad" class="contacto__input">
      <label for="mensaje"> mensaje </label>
      <textarea name="mensaje" id="" cols=30 rows="10" class="contacto__input"></textarea>

      <input type="submit" value="Enviar Mensaje" class="btn_enviar">
    </form>
  </div>
  <?php
  if (isset($_GET['ok'])) {
    echo "<h3> Su mensaje ha sido enviado con éxito </h3>";
  }
  ?>
</section>


<?php include("footer.php"); ?>