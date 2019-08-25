<?php session_start();


if (isset($_SESSION['nombre'])) {
	header('Location: login.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
	$contrasena = $_POST['contrasena'];
	$contrasena2 = $_POST['contrasena2'];

	$errores = '';

	if (empty($nombre) or empty($contrasena) or empty($contrasena2)) {
		$errores .= '<li style="color:white;">Por favor rellena todos los datos correctamente</li>';
	} else{
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=monresto','root','');
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}

		$statement = $conexion->prepare('select * from usuarios where nombre = :nombre limit 1');
		$statement->execute(array(':nombre' => $nombre));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<li style="color:white;">El nombre de usuario ya existe</li>';
		}

		$contrasena = hash('sha512',$contrasena);
		$contrasena2 = hash('sha512',$contrasena2);
		
		if ($contrasena != $contrasena2) {
			$errores .= '<li style="color:white;">Las contraseñas no son iguales</li>';
		}

	}

	if ($errores == '') {
		$statement = $conexion->prepare('insert into usuarios (id,nombre,contrasena) values (null,:nombre,:contrasena)');
		$statement->execute(array('nombre' => $nombre, 'contrasena' => $contrasena));
		$statement->debugDumpParams();
		header('Location: login.php');
	}
}

require 'view/registrate.view.php'

 ?>