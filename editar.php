<?php 
include_once 'action/conexao.php';
include_once 'includes/header.php';
if(isset($_GET['id'])):
	$id=mysqli_escape_string($conectar, $_GET['id']);
	$sql="SELECT * FROM clientes WHERE id='$id'";
	$resultado=mysqli_query($conectar,$sql);
	$dados=mysqli_fetch_array($resultado);
endif;
?>
<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light center">Editar Cliente</h3>
		<form action="action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
				<label for="nome">Nome:</label>
			</div><!-- input-field col s-12 -->
			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
				<label for="sobrenome">Sobrenome:</label>
			</div><!-- input-field col s-12 -->
			<div class="input-field col s12">
				<input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>">
				<label for="email">email</label>
			</div><!-- input-field col s-12 -->
			<div class="input-field col s12">
				<input type="number" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
				<label for="idade">Idade:</label>
			</div><!-- input-field col s-12 -->
			<button type="submit" name="btn-editar" class="btn green">Salvar Alterações</button>
			<a href="index.php" class="btn">Listar Clientes</a>
		</form>
	</div><!-- col s12m6 push-m3 -->
</div><!-- row -->
<?php 
include_once 'includes/footer.php';
?>