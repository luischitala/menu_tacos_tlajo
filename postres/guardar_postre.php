<?php 

include_once("../funciones/conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];
$precio_final = $_POST['precio_final'];

$statement = $conexion->prepare('insert into postres (nombre,descripcion,costo,precio_final) values (:nombre,:descripcion,:costo,:precio_final)');

$res = $statement->execute(array(
	'nombre'=> $nombre,
	'descripcion' => $descripcion,
	'costo'=> $costo,
	'precio_final'=>$precio_final
));

header('Location: postres.php')

 ?>