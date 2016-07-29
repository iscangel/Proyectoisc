<?php
include "conexion.php";
$id=$_POST['id'];

$sql="SELECT * FROM datos where Id=$id";
$result=mysqli_query($conexion,$sql);
$info= array();
if($result){
$i=0;
while($fila=mysqli_fetch_assoc($result)){
	$info[$i]=$fila;
	$i=$i+1;
	}
}else{
	echo "Error al ejecutar la consulta:".mysqli_error();
}
mysqli_close($conexion);
echo json_encode($info);

?>
