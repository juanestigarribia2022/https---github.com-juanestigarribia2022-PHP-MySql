<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$whatsapp = $_POST['whatsapp'];
$msj = $_POST['msj'];

include("conexion.php");

mysqli_query($conexion_db, "INSERT INTO comentarios VALUE (DEFAULT, '$nombre', '$apellido', '$whatsapp', '$msj')");
mysqli_close($conexion_db);
header("Location:comentarios_recibidos.php");
