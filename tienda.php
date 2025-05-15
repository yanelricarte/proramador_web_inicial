<?php include("header.php"); ?>

  <section class="tienda_contenido">
    <ul>
      <li> <a href="tienda.php?producto=ct"> Chocotorta </a></li>
      <li> <a href="tienda.php?producto=tr"> Torta de ricota </a></li>
      <li> <a href="tienda.php?producto=rc"> Roll de Canela </a></li>
    </ul>

  </section>
  <?php
  if (isset($_GET["producto"])) {
    switch ($_GET["producto"]) {
      case "ct":
        $nombre = "Chocotorta";
        $ingredientes = "Chocolinas, dulce de lecha y queso crema";
        $precio = 3000;
        $img = './img/chocotorta.jpeg';
        break;
      case "tr":
        $nombre = "Tarta de ricota";
        $ingredientes = "Ricota, azúcar impalpable, y masa frola";
        $precio = 3100;
        $img = './img/tartaricota.jpeg';
        break;
      case "rc":
        $nombre = "Roll de canela";
        $ingredientes = "Canela, manzanas, y azúcar rubia";
        $precio = 4100;
        $img = './img/rollcanela.jpeg';
        break;
    }
  

  ?>
  <div class="producto_descripcion">
    <h3> <?php echo $nombre; ?></h3>
    <p> <?php echo $ingredientes; ?></p>
    <p> <?php echo $precio; ?></p>
    <div class="contenedor_img">
      <img src="<?php echo $img; ?>" alt="">

    </div>
  </div>

<?php }?>


<?php include("footer.php"); ?>