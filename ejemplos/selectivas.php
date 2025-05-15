<?php
$numero = 18;

//IF
if ($numero > 18) {
  echo "Es mayor a 18";
} elseif ($numero = 18) {
  echo "Es igual a 18";
} else {
  echo "Es menor a 18";
}
echo "<br> Continua la ejecución del programa";


echo "<hr>";
// Switch
$postre = "nada";

switch ($postre) {
  case "Chocotorta":
    echo "Hoy tenemos chocotorta";
    break;
  case "Ricota":
    echo "Hoy tenemos tarta de ricota";
    break;
  case "Canela":
    echo "Hoy tenemos roll de canela";
    break;
    default: 
    echo "Medialunas";
}
