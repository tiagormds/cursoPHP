<?php
require_once 'cabecalho.php';
require_once 'banco-categorias.php';
require_once 'logica-usuario.php';

$categorias = listaCategorias($conexao);

verificaUsuario();

$produto = array('nome' => "", 'preco'=>"", 'descricao'=> "", "categoria_id"=>"1");
$usado = "";

?>

<h1>Formulário de Produto</h1>

<table class="table">
	<form action="adiciona-produto.php" method="post">
		
		<?php include 'produto-formulario-base.php';  ?>

		<tr>
			<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
		</tr>
	</form>
</table>

<?php include 'rodape.php'; ?>
