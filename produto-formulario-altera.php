<?php
require_once 'cabecalho.php';
require_once 'banco-categorias.php';
require_once 'banco-produto.php';

$categorias = listaCategorias($conexao);

$id = $_GET['id'];
$produto = buscaProduto($id, $conexao);

$usado = $produto['usado'] ? "checked='checked'" : "";

?>

<h1>Formulário de Alterar Produto</h1>

<table class="table">
	<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?=$produto['id']?>">

		<?php include 'produto-formulario-base.php';  ?>

		<tr>
			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
		</tr>
	</form>
</table>

<?php include 'rodape.php'; ?>