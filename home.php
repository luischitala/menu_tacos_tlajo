<?php session_start();

if (isset($_SESSION['nombre'])) {
	require 'view/home.view.php';
}else{
	header('Location: login.php');
 
}
?>