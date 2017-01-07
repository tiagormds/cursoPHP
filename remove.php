<?php
include "banco-produto.php";
include "conecta.php";

$id = $_POST['id'];

removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
die();