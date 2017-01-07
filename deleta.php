<?php

include 'banco-produto.php';
include 'conecta.php';

$id = $_POST['id'];

deletaProduto($conexao, $id);
header("Location: produto-lista.php?removido");
die();