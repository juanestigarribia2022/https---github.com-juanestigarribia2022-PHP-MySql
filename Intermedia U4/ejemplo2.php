<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");

$fecha_actual = date("l/M/Y");

echo "La fecha de hoy es: ".$fecha_actual;

$prueba2 = time();
echo "<br>".$prueba2;

$fecha = getdate(time());

echo "<p> Fecha ".date("d:m:Y", strtotime("+24hours") )."</p>";
echo "<p> Ultima clase ".date("d:m:Y", strtotime("last Monday") ). "</p>";
echo "<p> Proxima clase ".date("d:m:Y", strtotime("next Monday") ). "</p>";


?>