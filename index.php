<?php include("header.php"); ?>
  <h1> Introducción a php</h1>
  <?php
  //Comentario en PHP
  # esto también es un comentario de una línea

  /* Comentario de varias líneas 
  ocupa más de una línea
  */

  echo "Hola mundo";
  echo "<h2> Hola mundo </h2>";
  print "Hola mundo con print";

  // Declaración de variable 
  $curso = "Programador Web Inicial"; // variable de tipo cadena
  $unidades_curso = 8; // Variable de tipo entero
  $arancel = 90200.39; // Variable de tipo decimal (flotante)
  $fecha = '10/05/2025'; // Variable de tipo cadena 


  $curso_2 = "Programador Web Avanzado"; // variable de tipo cadena
  $unidades_curso_2 = 18; // Variable de tipo entero
  $arancel_2 = 80900.39; // Variable de tipo decimal (flotante)
  $fecha_2 = '20/11/2025'; // Variable de tipo cadena 

  ?>
  <section class="contenido">
    <div class="curso1">
      <h2> <?php echo $curso; ?></h2>
      <ul>
        <li> Duración: <?php echo $unidades_curso; ?> unidades</li>
        <li> Arancel: <?php echo $arancel; ?></li>
        <li> Fecha: <?php echo $fecha; ?></li>
      </ul>
    </div>
    <div class="curso2">
      <h2> <?php echo $curso_2; ?></h2>
      <ul>
        <li> Duración: <?php echo $unidades_curso_2; ?> unidades</li>
        <li> Arancel: <?php echo $arancel_2; ?></li>
        <li> Fecha: <?php echo $fecha_2; ?></li>
      </ul>
    </div>
    <?php 
    $dolar = 1200;
    $duracion_total = $unidades_curso + $unidades_curso_2;
    $arancel_total =  $arancel + $arancel_2;
    $arancel_dolar = $arancel_total / $dolar;
    ?>
    <div>
      <h3> Totales </h3>
      <ul>
        <li> Duración Total: <?php echo $duracion_total; ?> unidades</li>
        <li> Arancel total: <?php echo $arancel_total; ?></li>
        <li> Arancel u$$: <?php echo round($arancel_dolar) ; ?></li>
      </ul>
    </div>
  </section>

  <?php 
  
  
  //Contantes 
  define("NOMBRE", "Pepito");
  define("EDAD_MINIMA", 18);
  define("PI", 3.14159);
  
  const APELLIDO = "Fulanito";
  echo APELLIDO . "<br>";


  echo "Tu nombre es " . NOMBRE . "<br>";
  echo "La edad minima es  " . EDAD_MINIMA . "<br>";
  echo "El valor PI es  " . PI . "<br>"; 


  //Constantes predefinidas
  echo "Versión de PHP: " . PHP_VERSION . "<br>";
  echo "Sistema Operativo: " . PHP_OS . "<br>";
  echo PHP_INT_MAX. "<br>";
  echo PHP_INT_MIN. "<br>";
  echo PHP_FLOAT_MAX. "<br>";
  echo PHP_FLOAT_MIN. "<br>";

  ?>
<?php include("footer.php"); ?>