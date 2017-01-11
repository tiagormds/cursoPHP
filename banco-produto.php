<?php

require_once 'conecta.php';

function listaProduto($conexao){
	$produtos = [];
	$query = "SELECT produtos.*, categorias.nome as categoria_nome FROM produtos JOIN categorias ON produtos.categoria_id = categorias.id";
	$resultado = mysqli_query($conexao, $query);
	while ($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto ($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
$query = "INSERT INTO produtos(nome, preco, descricao, categoria_id, usado) VALUES('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
//echo $query;
return mysqli_query($conexao, $query);
}

function deletaProduto($conexao, $id){
	$query = "DELETE FROM produtos WHERE id={$id}";
	$resultado = mysqli_query($conexao, $query);
	return $resultado;
}

function buscaProduto($id, $conexao){
	$query = "SELECT * FROM produtos WHERE id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	$produto=mysqli_fetch_assoc($resultado);
	return $produto;
}

function alteraProduto ($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
$query = "UPDATE produtos SET nome='{$nome}', preco={$preco}, descricao='{$descricao}', categoria_id={$categoria_id}, usado={$usado} WHERE id='{$id}'";
//echo $query;
return mysqli_query($conexao, $query);
}