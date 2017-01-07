<?php

include 'cabecalho.php';
include 'conecta.php';
include 'banco-produto.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if(isset($_POST['usado'])){
	$usado = "true";
}else{
	$usado = "false";
}

if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)){
	echo "<p class='text-success' >Produto ".$nome.", foi alterado com sucesso!</p>";
}else{
	$erro = mysqli_error($conexao);
	echo "<p class='text-danger' >Produto ".$nome.", não foi alterado! - ".$erro."</p>";
}
?>

<?php include 'rodape.php'; ?>