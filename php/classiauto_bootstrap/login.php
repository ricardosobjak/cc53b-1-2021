<h2>Login</h2>

<form action="validar_login.php" method="post">

	<div class="login">
		<label class="form-label">E-mail</label>
		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">@</span>
			<input type="text" name="usuario" class="form-control" />
		</div>

		<label class="form-label">Senha</label>
		<input type="password" name="senha" class="form-control mb-3" />


		<button type="submit" class="btn btn-success w-100">Entrar</button>


		<p class="alert alert-danger text-center my-3"><?php echo $_GET["msg"]; ?></p>
	</div>

</form>