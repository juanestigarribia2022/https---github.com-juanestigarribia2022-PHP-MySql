<?php
$nombre = $_POST['nombre'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$domicilio = $_POST['domicilio'];
$dni = $_POST['dni'];
$pago = $_POST['pago'];
$celular = $_POST['celular'];
$celular_referente = $_POST['celular referente'];
$mail = $_POST['mail'];
$vendedor = $_POST['vendedor'];

include("conexion.php");

mysqli_query($conexion_db, "INSERT INTO clientes VALUE (DEFAULT, '$nombre', '$fecha_nacimiento', '$domicilio', '$dni', '$pago', '$celular', '$celular_referente', '$mail', '$vendedor')");

mysqli_close($conexion_db);
header("Location:index.php?ok");
