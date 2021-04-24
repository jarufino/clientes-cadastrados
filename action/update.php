<?php 
session_start();
require_once ('conexao.php');
if(isset($_POST['btn-editar'])):
	$nome=mysqli_escape_string($conectar, $_POST['nome']);
	$sobrenome=mysqli_escape_string($conectar, $_POST['sobrenome']);
	$email=mysqli_escape_string($conectar, $_POST['email']);
	$idade=mysqli_escape_string($conectar, $_POST['idade']);
	$id=mysqli_escape_string($conectar, $_POST['id']);
	$sql="UPDATE clientes SET nome='$nome', sobrenome='$sobrenome', email='email', idade='$idade' WHERE id='$id'";
	if(mysqli_query($conectar, $sql)):
		$_SESSION['mensagem']="Atualizado com Sucesso";
		header('Location:../index.php');
	else:
		$_SESSION['mensagem']="Erro ao atualizar";
		header('Location:../index.php');
	endif;
endif;


?>