<h2>Login</h2>

<form action="validar_login.php" method="post">

	<div class="login">
		<label>E-mail</label>
		<input type="text" name="usuario" />

		<label>Senha</label>
		<input type="password" name="senha" />


		<button type="submit" class="btn primario">Entrar</button>
	</div>

</form>

<br />
<p style="color:red; text-align: center;"><?php echo $_GET["msg"]; ?></p>
<br />