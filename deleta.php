<?php

require_once 'banco-produto.php';
require_once 'logica-usuario.php';

$id = $_POST['id'];

deletaProduto($conexao, $id);
$_SESSION['success'] = "Removido com sucesso!";
header("Location: produto-lista.php");
die();