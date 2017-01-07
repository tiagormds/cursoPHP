<?php

include "conecta.php";
include "banco-usuario.php";
include "logica-usuario.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = logandoUsuario($conexao, $email, $senha);

if(!$usuario){
	$_SESSION['danger'] = "Usuário ou senha, incorretos!";
	header("Location:index.php");
}else{
	logaUsuario($usuario['email']);
	$_SESSION['success'] = "Usuário Logado com sucesso!";
	header("Location:index.php");
}