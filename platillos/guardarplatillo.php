<?php 

include_once("../funciones/conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];	
$costo = $_POST['costo'];
$precio_final = $_POST['precio_final'];

$statement = $conexion->prepare('insert into platillos (nombre,descripcion, costo, precio_final) values (:nombre,:descripcion, :costo, :precio_final)');

$res = $statement->execute(array(
	'nombre' => $nombre,
	'descripcion' => $descripcion,
	'costo' => $costo,
	'precio_final' => $precio_final
));

$statement->debugDumpParams();

if ($res) {
	header('Location: platillos.php');
} else{
	//header('Location: platillos.php?e=1');
}



 ?>