<?php
require_once 'conecta.php';

function logandoUsuario($conexao, $email, $senha){
	$senhaMD5 = md5($senha);
	$query = "SELECT * FROM usuarios WHERE email='{$email}' and senha='{$senhaMD5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}