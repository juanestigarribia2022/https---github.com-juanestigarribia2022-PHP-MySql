<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$mensaje_form = $_POST['mensaje'];

// contraseña del 000web V?CJ^d7m5~v-Pg-L //

//$conexion = mysqli_connect('localhost', 'root', '', 'php_inicial') or exit ("No se pudo conectar a la base de datos");//

$conexion = mysqli_connect('localhost', 'id20457626_juan', 'V?CJ^d7m5~v-Pg-L', 'id20457626_php_inicial') or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$edad_form', '$mensaje_form')");

mysqli_close($conexion);
header("Location: contacto.php?ok");