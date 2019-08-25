<?php session_start();


if (isset($_SESSION['nombre'])) {
	header('Location: home.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = filter_var(strtolower($_POST['nombre']),FILTER_SANITIZE_STRING);
	$contrasena = $_POST['contrasena'];
	$contrasena = hash('sha512', $contrasena);


	try {
		$conexion = new PDO('mysql:host=localhost;dbname=monresto','root','');
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();;
	}

	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE nombre = :nombre AND contrasena = :contrasena');
	$statement->execute(array('nombre' => $nombre, 'contrasena' => $contrasena));
	$statement->debugDumpParams();

	$resultado = $statement->fetch();
	var_dump($resultado);
	if ($resultado !== false) {
		$_SESSION['nombre'] = $nombre;
		
		header('Location: home.php');
	}else {
		$errores .= '<li style="color:white;">Se han ingresado los datos mal</li>';
	}
	
}



require 'view/login.view.php';

 ?>