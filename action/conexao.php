<?php 
	//Conecto aqui com o BD
	$servidor="localhost";
	$usuario="root";
	$senha="";
	$banco="crud";

	$conectar=mysqli_connect($servidor, $usuario, $senha, $banco);
	mysqli_set_charset($conectar, "utf8");
	if(mysqli_connect_error()):
		echo "Erro ao conectar: ".mysqli_connect_error();
	endif;
	
 ?>