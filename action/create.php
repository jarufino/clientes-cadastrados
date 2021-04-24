<?php 
	session_start();
	require_once ('conexao.php');
	if(isset($_POST['btn-cadastrar'])):
		$nome=mysqli_escape_string($conectar, $_POST['nome']);
		$sobrenome=mysqli_escape_string($conectar, $_POST['sobrenome']);
		$email=mysqli_escape_string($conectar, $_POST['email']);
		$idade=mysqli_escape_string($conectar, $_POST['idade']);
		$sql="INSERT INTO clientes (nome, sobrenome, email, idade) VALUES('$nome', '$sobrenome','$email', '$idade')";
		if(mysqli_query($conectar, $sql)):
			$_SESSION['mensagem']="Cadastrado com Sucesso";
			header('Location:../index.php');
		else:
			$_SESSION['mensagem']="Erro ao cadastrar";
			header('Location:../index.php');
		endif;
	endif;


 ?>