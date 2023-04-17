<?php
$usuario_form = $_POST['usuario'];
$contraseña_form = $_POST['contraseña'];

//$conexion = mysqli_connect('localhost', 'root', '', 'php_inicial') or exit ("No se pudo conectar a la base de datos");//

$conexion = mysqli_connect('localhost', 'id20457626_juan_usuarios', '@%w@\J8rIgYRNF3v', 'id20457626_usuarios_php_inicial') or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO usuarios VALUES (DEFAULT, '$usuario_form', '$contraseña_form')");

mysqli_close($conexion);
header("Location: usuarios.php?ok");