<?php

include "conecta.php";
include "banco-usuario.php";
include "logica-usuario.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = logandoUsuario($conexao, $email, $senha);

if(!$usuario){
	header("Location:index.php?falhaDeSeguranca=1");
}else{
	logaUsuario($usuario['email']);
	header("Location:index.php?falhaDeSeguranca=0");
}