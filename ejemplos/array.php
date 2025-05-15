<?php 
//Array indexado 
$frutas = array('manzanas', 'naranjas', 'bananas', 'uva');
echo $frutas[3];
echo "<pre>";
print_r($frutas);
echo "</pre>";

// Agregar un elemento al final de array
array_push($frutas, "durazno");
echo "<pre>";
print_r($frutas);
echo "</pre>";

//Array asociativo 
$personas = array(
  "nombre" => "Pepito",
  "edad" => 15,
  "nacionalidad" => "argentino"
);
//Para recorrer el array $personas
foreach($personas as $clave => $valor){
  echo $clave . " : " .$valor . "<br>";
}

echo ($personas["nombre"]);
echo "<br> Array asociativo (personas) </br>";
echo "<pre>";
print_r($personas);
echo "</pre>";

//Array multidimensional 
$grupo = array(
  array("nombre" => "Harry", "apellido" => "Potter", "edad" => 15),
  array("nombre" => "Luna", "apellido" => "Lovegood", "edad" => 13),
  array("nombre" => "Hermione", "apellido" => "Granger", "edad" => 17),
  array("nombre" => "Ron", "apellido" => "Weasley", "edad" => 19)
);

echo "<br> Array multidimensional (grupo) </br>";
echo "<pre>";
print_r($grupo);
echo "</pre>";

echo $grupo[1]["apellido"];

echo "<hr>";

//Usamos foreach para imprimir todos los array del multidimensional
foreach($grupo as $personaje){
foreach($personaje as $clave => $valor){
  echo $clave . " : " .$valor . "<br>";
}
}