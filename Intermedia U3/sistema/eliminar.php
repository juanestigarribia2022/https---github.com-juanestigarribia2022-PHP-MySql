<?php
include ("conexion.php");
$id_cliente = $_GET['id'];
mysqli_query($conexion_db, "DELETE FROM clientes WHERE id=$id_cliente");

header("Location: listar.php");