<?php 
session_start();
require_once ('conexao.php');
if(isset($_POST['btn-deletar'])):	
	$id=mysqli_escape_string($conectar, $_POST['id']);
	$sql="DELETE  FROM clientes WHERE id='$id'";
	if(mysqli_query($conectar, $sql)):
		$_SESSION['mensagem']="Deletei com Sucesso";
		header('Location:../index.php');
	else:
		$_SESSION['mensagem']="Erro ao deletar";
		header('Location:../index.php');
	endif;
endif;