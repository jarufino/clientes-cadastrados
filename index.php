<?php
include_once 'includes/header.php';
include_once 'includes/mensagem.php';
include_once 'action/conexao.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light center">Clientes:</h3>
		<table class="striped">
			<thead>				
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>email:</th>
					<th>Idade:</th>
					<th>Editar/Excluir</th>			
				</rh>				
			</thead>
			<tbody>
				<?php 
				$sql="SELECT * FROM clientes";
				$resultado=mysqli_query($conectar,$sql);
				if(mysqli_num_rows($resultado)>0):
				while($dados=mysqli_fetch_array($resultado)):
					?>
					<tr>
						<td><?php echo $dados['nome']; ?></td>
						<td><?php echo $dados['sobrenome']; ?></td>
						<td><?php echo $dados['email']; ?></td>
						<td><?php echo $dados['idade']; ?></td>
						<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
						<div id="modal<?php echo $dados['id'];?>" class="modal">
							<div class="modal-content">
								<h4 class="center">Excluir...</h4>
								<p class="center">Vai excluir mesmo?</p>
							</div>
							<div class="modal-footer">
								<form action="action/delete.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
									<button type="submit" name="btn-deletar" class="btn red">Sim, vamos deletar</button>
									<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
								</form>
							</div>
						</div>
					</tr>
					<?php 
				endwhile;
				else:?>
					<tr>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn green">Adicionar Cliente</a>
	</div><!-- col s12m6 push-m3 -->
</div><!-- row -->
<?php 
include_once 'includes/footer.php';
?>