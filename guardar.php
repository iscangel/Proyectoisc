<?php

//Se Agrega el archivo que contine la conexion a la BD
include "conexion.php";

$NombreServicio=$_POST['NombreServicio'];
$Direccion=$_POST['Dir'];
$RFC=$_POST['rfc'];
$Telefono=$_POST['Tel'];
$clasificacion_id=$_POST['class'];

$sql="INSERT INTO datos VALUES('','$NombreServicio','$Direccion','$RFC','$Telefono','$clasificacion_id')";
$res=mysqli_query($conexion,$sql);
if($res){
	echo "Los datos se registraron de manera exitosa";
	echo "NombreServicio:".$NombreServicio." Direccion:".$Direccion." RFC:".$RFC." Tel:".$Telefono." clasificacion_id:".$clasificacion_id;
	}else{
		  echo "Se produjo un error al momento de registar los datos:".mysql_error();
		}
mysqli_close($conexion);

?>
