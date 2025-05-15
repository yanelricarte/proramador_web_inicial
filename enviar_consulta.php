<?php
$nombre_form= $_POST['nombre'];
$apellido_form= $_POST['apellido'];
$edad_form= $_POST['edad'];
$mensaje_form= $_POST['mensaje'];

/* 
$conexion = mysqli_connect('localhost', 'root', '', 'programador_web_inicial_444') or exit("No se pudo conectar a la base de datos");*/

$conexion = mysqli_connect('sql303.infinityfree.com', 'if0_38935302', 'rsNtpFIZY6mG28F', 'if0_38935302_web_incial') or exit("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES(DEFAULT, '$nombre_form', '$apellido_form', '$edad_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: contacto.php?ok");
