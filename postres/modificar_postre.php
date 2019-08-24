<?php

include_once("../funciones/conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];
$precio_final = $_POST['precio_final'];

/* Preparar consulta sql */
$statement = $conexion->prepare('update postres set nombre = :nombre,  descripcion = :descripcion, costo = :costo, precio_final = :precio_final where id = :id');

/* Ejecutar consulta sql */
$res = $statement->execute(array(
	'id' => $id,
	'nombre'=> $nombre,
	'descripcion' => $descripcion,
	'costo'=> $costo,
	'precio_final'=>$precio_final
));

if ( $res ){
	header("location: postres.php");
}else{
	header("location: postres.php?e=1");
}
