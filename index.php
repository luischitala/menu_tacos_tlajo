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
	<link rel="stylesheet" href="css/estilos.css">
	<title>MonResto</title>
</head>
<body>
<header>
	<div class="container-fluid headerfx" style="background: #3a4454; height: 100px ">
		<div class="row">
			<div class="col 12 d-flex justify-content-start mt-2 mr-3 contactoheader">
				<h1 style="font-family: Roboto; color: white; ">Mon Resto</h1>
				</div>
				<div class="col 12 d-flex justify-content-left mt-2 ml-3 contactoheader">
				</div>
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
					</div>
					<div class="col-6 " >
						<img src="img/fondo.jpg " width="600px">
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