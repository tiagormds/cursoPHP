<?php

include 'cabecalho.php';
include 'banco-produto.php';
include 'conecta.php';

if(isset($_GET['removido'])){
	echo "<p class='alert-success'>Produto removido com sucesso!</p>";
}

$produtos = listaProduto($conexao);
?>


<table class="table table-striped table-bordered">
	<tr>
		<td><b>Nome</b></td>
		<td><b>Preço</b></td>
		<td><b>Descrição</b></td>
		<td><b>Categoria</b></td>
		<td colspan="2" ><b>Ações</b></td>
	</tr>
	<?php foreach($produtos as $produto):  ?>
		<tr>
			<td><?=$produto['nome']?></td>
			<td><?=$produto['preco']?></td>
			<td><?= substr($produto['descricao'], 0, 40)?></td>
			<td><?=$produto['categoria_nome']?></td>
			<td>
				<a class="btn btn-primary" href="produto-formulario-altera.php?id=<?=$produto['id']?>">Alterar</a>
			</td>
			<td>
				<form action="deleta.php" method="post">
					<input type="hidden" name="id" value="<?=$produto['id']?>">
					<button class="btn btn-danger">Excluir</button>
				</form>
			</td>
		</tr>
	<?php endforeach;  ?>
</table>


<?php include 'rodape.php' ?>