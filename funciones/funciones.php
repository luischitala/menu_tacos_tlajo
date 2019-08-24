<?php

function checar_error( $texto ){

	if ( isset( $_GET['e'] ) ){
		print('<div class="alert alert-danger" role="alert">');
		print( $texto );
		print('</div>');
	}

}

function menu(){
	
	print('<ul>');
		print('<li style="color:white;" ><a href="bebidas/bebidas.php" style="color:white;" >Bebidas</a></li>');
		print('<li style="color:white;" ><a href="platillos/platillos.php" style="color:white;">Platillos</a></li>');
		print('<li style="color:white;" ><a href="postres/postres.php" style="color:white;">Postres</a></li>');
	print('</ul>');
	
}

function menu2(){
	print('<ul>');
		print('<li style="color:white;" ><a href="../bebidas/bebidas.php" style="color:white;" >Bebidas</a></li>');
		print('<li style="color:white;" ><a href="../platillos/platillos.php" style="color:white;">Platillos</a></li>');
		print('<li style="color:white;" ><a href="../postres/postres.php" style="color:white;">Postres</a></li>');
	print('</ul>');
}