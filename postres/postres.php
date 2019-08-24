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
				<a href="../index.php" style="font-family: Roboto; color: white; font-size: 40px;">Mon Resto</a>

			
				</div>
				<div class="col 12 d-flex justify-content-left mt-2 ml-3 contactoheader">
					<?php menu2(); ?>
				</div>
		</div>
	</div>
</header>
<main class="container-fluid" style="background: #53687e; height: 525px; padding-top: 20px;">
	<div class="row">
		<div class="col-6">
			<blockquote>
				
					<frameset>
						<h4 style="color:white;">Agregar Postre</h4>
					<form method="POST" action="guardar_postre.php">
					<label style="color:white;">Nombre:</label><br />
					<input type="text" name="nombre"><br />
					<label style="color:white;">Descripcion:</label><br />
					<input type="text" name="descripcion"><br />
					<label style="color:white;">Costo:</label><br />
					<input type="text" name="costo"><br />
					<label style="color:white;">Precio Final:</label><br />
					<input type="text" name="precio_final"><br /><br />
					<input type="submit" class="btn btn-primary" value="Agregar" />
					</form>
					</frameset>
				</blockquote>
		
		</div>
		<div class="col-6" style="background: white;" >
			<?php
				// variable de busqueda
				

				if ( isset( $_GET["q"] ) ){
					$q = $_GET["q"];
					$statement = $conexion->prepare('select * from postres where nombre like "%' . $q . '%"');	
				}else{
					$statement = $conexion->prepare('select * from postres');	
				}
				
				$statement->execute();

				checar_error("Error al intetar guardar el postre");

				?>
				<div class="container-fluid d-flex flex-wrap">
					<div class="row">
						<form action="" method="GET" class="form-inline">
							<div class="col-md-8">
								<input type="tetx" name="q" class="form-control" placeholder="Buscar postre">
							</div>
							<div class="col-md-4">
								<input type="submit" value="Buscar" class="btn">
							</div>
						</form>
					</div>
				</div>	

			<?php
				print("<table border=1 class='table table-bordered table-striped'>");

					print("<tr> ");
					print("<th>ID</th>");
					print("<th>NOMBRE</th>");
					print("<th>DESCRIPCION</th>");
					print("<th>COSTO</th>");
					print("<th>PRECIO FINAL</th>");
					print("</tr>");

					foreach ($statement->fetchALL() as $key => $value) {
					print("<tr>");
					print("<td>" . $value['id'] . "</td>");
					print("<td><a href='editar_postre.php?id=".$value['id']. "'>". $value['nombre']. "</td>");
					print("<td>". $value['descripcion']. "</td>");
					print("<td>" . $value['costo'] . "</td>");
					print("<td>" . $value['precio_final'] . "</td>");
					print("</tr>");
					}	
					print("<table>");
			?>
		</div>
	</div>
</main>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>