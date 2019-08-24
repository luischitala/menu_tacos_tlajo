<?php 
	include_once('../funciones/funciones.php');
	include_once('../funciones/conexion.php');
 ?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,400i,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/fontello.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>MonResto</title>
</head>
<body>
<header>
	<div class="container-fluid headerfx" style="background: #3a4454; height: 100px ">
		<div class="row">
			<div class="col 12 d-flex justify-content-start mt-2 mr-3 contactoheader">
				<a href="../index.php" style="font-family: Roboto; color: white; ">Mon Resto</a>

			
				</div>
				<div class="col 12 d-flex justify-content-left mt-2 ml-3 contactoheader">
					<?php menu(); ?>
				</div>
		</div>
	</div>
</header>
<main>
<div class="container-fluid main d-flex flex wrap" style="background:#53687e; height: 525px; ">
	<div class="row">
						<div class="col-6" style="padding-top: 10px;">
						<?php
					
						$statement = $conexion->prepare('select * from platillos');
						$statement->execute();

						checar_error("Error al intetar guardar el platillo");

						print("<table border=1 >");

							foreach ($statement->fetchALL() as $key => $value) {
							print("<tr>");
							print("<td>" . $value['id'] . "</td>");
							print("<td>". $value['nombre']. "</td>");
							print("<td>". $value['descripcion']. "</td>");
							print("<td>" . $value['costo'] . "</td>");
							print("<td>" . $value['precio_final'] . "</td>");
							print("</tr>");
							}	
							print("<table>");
						 ?>
						</div>
						<div class="col-6">
 						<blockquote>
							<frameset>
							 <h4 style="color:white;">Agregar platillos</h4>
							<form method="POST" action="guardarplatillo.php">
							<label>Nombre:</label><br />
							<input type="text" name="nombre"><br />
							<label>Descripcion:</label><br />
							<input type="text" name="descripcion"><br />
							<label>Costo:</label><br />
							<input type="text" name="costo"><br />
							<label>Precio Final:</label><br />
							<input type="text" name="precio_final"><br />
							<input type="submit" value="Agregar" />
							</form>
							</frameset>
						</blockquote>
						</div>
	</div>
</div>
</main>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>