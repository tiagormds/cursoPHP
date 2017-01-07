<?php 

include "cabecalho.php";
include "banco-categoria.php";
include "conecta.php";
include "banco-produto.php";

$categorias = listaCategorias($conexao);
$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$usado = $produto['usado'] ? "checked=checked" : "";

?>

	<h1>Formulário de Alteração de Produto</h1>

	<form action="altera-produto.php" method="post" accept-charset="utf-8"/>
		<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">
			<tr>
				<td>Nome:</td>
				<td><input class="form-control" name="nome" type="text" value="<?=$produto['nome']?>" /></td>
			</tr>
			<tr>
				<td>Preço</td>
				<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"><br /></td>
			</tr>
			<tr>
				<td>Descrição</td>
				<td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
			</tr>
			<tr>
				<td>Categoria</td>
				<td>
					<select class="form-control" name="categoria_id">
						<?php foreach($categorias as $categoria):
							$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
							$selecao = $essaEhACategoria ? "selected = selected" : "";

						?>
						<option <?=$selecao?> value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><input <?=$usado?> type="checkbox" name="usado" value="true">Usado</td>
			</tr>
			<tr>
				<td><button class="btn btn-primary" name="alterar"  type="submit">Alterar</button></td>
			</tr>
		</table>
	</form>

<?php include "rodape.php" ?>