<?php
include 'cabecalho.php';
include 'logica-usuario.php';

if (isset($_GET['falhaDeSeguranca']) && $_GET['falhaDeSeguranca']==1) {
	echo "<p class='alert-danger'>Usuário ou senha, incorretos!</p>";
}

if (isset($_GET['falhaDeSeguranca']) && $_GET['falhaDeSeguranca']==0) {
	echo "<p class='alert-success'>Usuário Logado com sucesso!</p>";
}

if (isset($_GET['falhaDeAcesso']) && $_GET['falhaDeAcesso']==1) {
	echo "<p class='alert-danger'>Usuário, é nescessário logar para ter acesso a essa funcionalidade!</p>";
}


?>

<?php if (usuarioEstaLogado()){
echo "<h1>Bem-vindo!</h1>";
echo "<p class='alert-success'>Usuário logado como: ".usuarioLogado()."</p>";
}else{
?>

<h2>Login</h2>

<form action="login.php" method="post">
	<table class="table">
		<tr>
			<td>Email</td>
			<td><input class="form-control" type="text" name="email"></td>
		</tr>

		<tr>
			<td>Senha</td>
			<td><input class="form-control" type="password" name="senha"></td>
		</tr>

		<tr>
			<td><button class="btn btn-primary">Login</button></td>
		</tr>
	</table>
</form>
<?php
}
include 'rodape.php';

?>