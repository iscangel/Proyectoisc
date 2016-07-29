<?php

$usario="u783648944_migue";
$passwd="sistemas";
$servidor="mysql.hostinger.mx";
$BD="u783648944_pc";

/*$usario="n260m_14426545";
$passwd="drag0n";
$servidor="sql206.260mb.net";
$BD="n260m_14426545_pcatual";*/

$conexion=mysqli_connect($servidor,$usario,$passwd,$BD)or die("Error al conectarse a la base de datos:".mysqli_error());
?>
