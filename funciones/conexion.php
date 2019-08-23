<?php 

$usuario = "root";
$password = "";
$bd = "monresto";
$servidor = "localhost";


$conexion = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $usuario,$password);


 ?>