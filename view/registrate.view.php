
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,400i,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Página principal</title>
</head>
<body style="">
<header>
	<div class="container-fluid " style="background: #3a4454; height: 100px ">
		<div class="row">
			<div class="col 12 d-flex justify-content-start mt-2 mr-3 contactoheader">
				<h1 style="font-family: Roboto; color: white; ">Mon Resto </h1>
				<h3 style="font-family: Roboto; color: white; padding-top: 10px; padding-left: 10px; ">Su administrador de confianza </h3>
				</div>
				
		</div>
	</div>
</header>
<main>
	<div class="container-fluid main" style="background:#53687e; height: 525px; ">
		<div class="row justify-content-center" style="padding-top:10px;">
			<h2 style="color:white; text-align: center;">Bienvenido a la aplicación MonResto</h2>
			<div class="col-8 d-flex" style="padding-top: 40px;">
				<div class="col-6">
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login" class="formulario">
				  <div class="form-group" class="formulario" name="login">
				  	<i class="icon-user-male" style="color:white;"></i>
				    <label style="color:white;">Usuario</label>
				    <input type="text" class="form-control nombre"  placeholder="Usuario" name="nombre">
				<!--     <small id="emailHelp" style="color:white;" >No ingrese con un usuario que no sea suyo</small> -->
				  </div>
				  <div class="form-group">
				  	<i class="icon-lock" style="color:white;"></i>
				    <label  style="color:white;">Contraseña</label>
				    <input type="password" class="form-control contrasena" name="contrasena" placeholder="Contraseña" >
				  </div>
				   <div class="form-group">
				  	<i class="icon-lock" style="color:white;"></i>
				    <label  style="color:white;">Repetir contraseña</label>
				    <input type="password" name="contrasena2"  class="form-control contrasena"  placeholder="Contraseña" >
				  </div>
				 <!--  <div class="form-check" style="padding-left: 25px;">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1" >
				    <label class="form-check-label" for="exampleCheck1" style="color:white; padding-top: 0;">Recuérdame</label>
				  </div> -->
				  <div class="form-group">
				  	<i class="btn btn-primary" onclick="login.submit()">Regístrate</i>
				  </div>
				  <?php if(!empty($errores)): ?>
				  <div class="error">
				  	<ul>
				  		<?php echo $errores; ?>
				  	</ul>
				  </div>
				  <?php endif; ?>
					</form>
					<p>
						<h4 style="color:white; text-align: center;">¿Ya tienes cuenta?</h4>
						<a href="login.php" style="color:white; font-size: 20px; padding-left: 150px;">Inicia sesión</a>
					</p>
				</div>
				<div class="col-6 d-flex justify-content-end" style="padding-top: 30px;">
					<img src="img/person-icon.png" width="200px" height="200px">
				</div>
			</div>
		</div>
	</div>
	
</main>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>