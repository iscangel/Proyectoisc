<?php
//Se Agrega el archivo que contine la conexion a la BD
include "conexion.php";

$IdServicio=$_POST['IdServicio'];
$NombreServicio=$_POST['NombreServicio'];
$Direccion=$_POST['Dir'];
$RFC=$_POST['rfc'];
$Telefono=$_POST['Tel'];
$clasificacion_id=$_POST['class'];

$sql="UPDATE datos SET Id='$id', NombreServicio='$NombreServicio', Direccion='$Direccion', RFC='$rfc', Telefono='$Telefono', clasificacion_id='$clasificacion_id' WHERE Id=$id";
$res=mysqli_query($conexion,$sql);
if($res){
	echo "Los datos se actualizaron de manera exitosa";
	echo "NombreServicio:".$NombreServicio." Direccion:".$Direccion." RFC:".$rfc." Telefono:".$Telefono." clasificacion_id:".$clasificacion_id;
	}else{
		  echo "Se produjo un error al momento de Actualizar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
