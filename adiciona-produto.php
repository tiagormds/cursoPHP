<?php

require_once 'cabecalho.php';
require_once 'banco-produto.php';
require_once "logica-usuario.php";
require_once "class/Produto.php";

verificaUsuario();

$produto = new Produto();

$produto->nome = $_POST['nome'];
$produto->preco = $_POST['preco'];
$produto->descricao = $_POST['descricao'];
$produto->categoria_id = $_POST['categoria_id'];

if(isset($_POST['usado'])){
	$produto->usado = "true";
}else{
	$produto->usado = "false";
}

if(insereProduto($conexao, $produto)){
	echo "<p class='text-success' >Produto ".$produto->nome.", ".$produto->preco." foi adicionado com sucesso!</p>";
}else{
	$erro = mysqli_error($conexao);
	echo "<p class='text-danger' >Produto ".$produto->nome.", não foi adicionado! - ".$erro."</p>";
}
?>

<?php include 'rodape.php'; ?>
