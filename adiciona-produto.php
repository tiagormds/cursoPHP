<?php

require_once 'cabecalho.php';
require_once 'banco-produto.php';
require_once "logica-usuario.php";

verificaUsuario();

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if(isset($_POST['usado'])){
	$usado = "true";
}else{
	$usado = "false";
}

if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){
	echo "<p class='text-success' >Produto ".$nome.", ".$preco." foi adicionado com sucesso!</p>";
}else{
	$erro = mysqli_error($conexao);
	echo "<p class='text-danger' >Produto ".$nome.", ".$preco." não foi adicionado! - ".$erro."</p>";
}
?>

<?php include 'rodape.php'; ?>
