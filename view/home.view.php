<?php 

include_once('funciones/conexion.php');
include_once('funciones/funciones.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,400i,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>MonResto</title>
</head>
<body>
<header>
	<div class="container-fluid headerfx" style="background: #3a4454; height: 100px ">
		<div class="row">
			<div class="col 12 d-flex justify-content-start mt-2 mr-3 contactoheader">
				<h1 style="font-family: Roboto; color: white; ">Mon Resto - Editor de recetas</h1>
				</div>
				<div class="col 12 d-flex justify-content-left mt-2 ml-3 contactoheader">
			</div>
			<a href="cerrar.php" class="c-3 d-flex align-items-center" style="font-size: 20px; padding-top: 20px; padding-right: 40px; color: white; font-family: Roboto;">
				<div class="d-flex flex-column text-center">
					<span>Salir del programa</span>
					<i class="icono icon-mail"></i>
				</div>
			</a>
		</div>
	</div>
</header>
<main>
<div class="container-fluid main" style="background:#53687e; height: 525px; ">
	
		<div class="row" style="padding-top: 20px;">
			<div class="container">
				<div class="row">
					<div class="col-6 " style="background: #53687e; height: 450px; padding-right:10px;">
						<h4 style="color:white;">Elige la base de datos a la que quieres accesar</h4>
						<?php menu(); ?>
						<nav class="col-md-12 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap">
					<a href="#" class="c-1 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>Platillos</span>
							<i class="icono icon-brief"></i>
						</div>
					</a>
					<a href="#" class="c-2 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>Bebidas</span>
							<i class="icono icon-user"></i>
						</div>
					</a>
					<a href="#" class="c-3 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>Postres</span>
							<i class="icono icon-mail"></i>
						</div>
					</a>
					
				</nav>
					</div>
					<div class="col-6 " >
						<img src="img/fondo.jpg " width="600px">
					</div>
				</div>	
			</div>
		</div>
</div>

</div>
</main>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>