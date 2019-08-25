<?php session_start();

if (isset($_SESSION['usuario'])) {
 	header('Location:home.php');
 } else {
 	('Location: registrate.php');
 }




 ?>