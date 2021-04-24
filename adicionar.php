<?php 
include_once 'includes/header.php';
?>
<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light center">Novo Cliente</h3>
		<form action="action/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome:</label>
			</div><!-- input-field col s-12 -->
			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome:</label>
			</div><!-- input-field col s-12 -->
			<div class="input-field col s12">
				<input type="email" name="email" id="email">
				<label for="email">email</label>
			</div><!-- input-field col s-12 -->
			<div class="input-field col s12">
				<input type="number" name="idade" id="idade">
				<label for="idade">Idade:</label>
			</div><!-- input-field col s-12 -->
			<button type="submit" name="btn-cadastrar" class="btn green">Cadastrar</button>
			<a href="index.php" class="btn">Listar Clientes</a>
		</form>
	</div><!-- col s12m6 push-m3 -->
</div><!-- row -->
<?php 
include_once 'includes/footer.php';
?>