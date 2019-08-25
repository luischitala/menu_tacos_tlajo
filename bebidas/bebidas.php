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
	<link rel="stylesheet" href="css/estilos.css">
	<title>MonResto</title>
</head>
<body>
<header>
		<div class="container-fluid">
			<div class="row nav rounded-top align-items-stretch justify-content-between">
					<!-- logotipo -->
				<div class="col-md-12 col-lg logo d-flex align-items-center justify-content-center justify-content-lg-start">
					<a href="../index.php" style="font-family: Roboto; color: white; font-size: 40px; ">Mon Resto</a>
				</div>
				<nav class="col-md-12 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap">
					<a href="../platillos/platillos.php" class="c-1 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>Platillos</span>
							<i class="icono icon-fast-food"></i>
						</div>
					</a>
					<a href="../bebidas/bebidas.php" class="c-2 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>Bebidas</span>
							<i class="icono icon-bar"></i>
						</div>
					</a>
					<a href="../postres/postres.php" class="c-3 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>Postres</span>
							<i class="icono icon-pharmacy"></i>
						</div>
					</a>
				</nav>
			</div>
				
	</header>
<main>
<main class="container-fluid" style="background: #53687e; height: 525px; padding-top: 20px;">
	<div class="row">
		<div class="col-6">
			<blockquote>
					<frameset>
						<h4 style="color:white;">Agregar Bebida</h4>
					<form method="POST" action="guardar_bebida.php">
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
					$statement = $conexion->prepare('select * from bebidas where nombre like "%' . $q . '%"');	
				}else{
					$statement = $conexion->prepare('select * from bebidas');	
				}
				
				$statement->execute();

				checar_error("Error al intetar guardar la bebida");

				?>
				<div class="container-fluid d-flex flex-wrap">
					<div class="row">
						<form action="" method="GET" class="form-inline">
							<div class="col-md-8">
								<input type="tetx" name="q" class="form-control" placeholder="Buscar bebida">
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
					print("<td>". $value['nombre']. "</td>");
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
</main>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>