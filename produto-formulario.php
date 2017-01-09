<?php
include 'cabecalho.php';
include 'conecta.php';
include 'banco-categorias.php';
include 'logica-usuario.php';

$categorias = listaCategorias($conexao);

verificaUsuario();

?>

<h1>Formulário de Produto</h1>

<table class="table">
	<form action="adiciona-produto.php" method="post">
		<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Preco:</td>
			<td><input class="form-control" type="number" name="preco"></td>
		</tr>
		<tr>
			<td>Descrição</td>
			<td><textarea name="descricao" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="usado" value="true">Usado</td>
		</tr>
		<tr>
			<td>Categoria</td>
			<td>
			<select class="form-control" name="categoria_id"  >
				<?php foreach($categorias as $categoria): ?>
					<option value="<?=$categoria['id']?>">
						<?=$categoria['nome']?>
					</option>
				<?php endforeach; ?>
			</select>
			</td>
		</tr>
		<tr>
			<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
		</tr>
	</form>
</table>

<?php include 'rodape.php'; ?>
