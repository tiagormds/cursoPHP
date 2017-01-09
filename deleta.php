<?php

include 'banco-produto.php';
include 'conecta.php';
include 'logica-usuario.php';

$id = $_POST['id'];

deletaProduto($conexao, $id);
$_SESSION['success'] = "Removido com sucesso!";
header("Location: produto-lista.php");
die();