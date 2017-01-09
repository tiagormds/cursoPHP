<?php
include 'cabecalho.php';
include 'logica-usuario.php';
include 'mostra-alerta.php';

mostraAlerta("success");
mostraAlerta("danger");


?>

<?php if (usuarioEstaLogado()){
echo "<h1>Bem-vindo!</h1>";
echo "<p class='alert-success'>Usuário logado como: ".usuarioLogado()." - <a href='logout.php'>Deslogar</a></p>";
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