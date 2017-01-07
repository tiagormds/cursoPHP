<?php

session_start();
function usuarioEstaLogado(){
	return isset($_SESSION['usuario_logado']);
}

function verificaUsuario(){
	if(!usuarioEstaLogado()){
		header("Location:index.php?falhaDeAcesso=1");
		die();
	}
}

function usuarioLogado(){
	return $_SESSION['usuario_logado'];
}

function logaUsuario($email){
	$_SESSION['usuario_logado'] = $email;
}