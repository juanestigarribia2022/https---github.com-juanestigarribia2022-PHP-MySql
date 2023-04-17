<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$mensaje_form = $_POST['mensaje'];

// contraseña del 000web V?CJ^d7m5~v-Pg-L //

//$conexion = mysqli_connect('localhost', 'root', '', 'php_inicial') or exit ("No se pudo conectar a la base de datos");//

//ENVIO DE MAIL POR CONSULTA   //
$cuerpo_mail = "Nombre: ".$nombre_form . "\r\n"."Apellido: ".$apellido_form . "\r\n"."Edad: ".$edad_form."\r\n"."Mensaje: ".$mensaje_form;
mail("estigarribiajuanesteban@gmail.com", "Mensaje enviado desde la web de CrediMas", $cuerpo_mail);

$conexion = mysqli_connect('localhost', 'id20457626_juan', '9C9{MO}7rbH6yB?M', 'id20457626_php_inicial') or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$edad_form', '$mensaje_form')");

mysqli_close($conexion);
header("Location: contacto.php?ok");