<h2>Cadastrar-se</h2>

<form action="user/controller.php" method="POST">
	<input type="hidden" name="action" value="<?php echo $_GET["action"]; ?>" />

	<label for="nome">Nome</label>
	<input type="text" name="nome" />

	<label for="nascimento">Data de Nascimento</label>
	<input type="date" name="nascimento" />

	<label for="sexo">Sexo</label>
	<select name="sexo">
		<option value="F">Feminino</option>
		<option value="M">Masculino</option>
	</select>

	<label for="email">E-mail</label>
	<input type="mail" name="email" />

	<label for="telefone">Telefone</label>
	<input type="tel" name="telefone" />

	<label for="cidade">Cidade</label>
	<input type="text" name="cidade" />

	<label for="estado">Estado</label>
	<input type="text" name="estado" />

	<label for="pais">País</label>
	<input type="text" name="pais" placeholder="Brasil" />

	<label for="cep">CEP</label>
	<input type="text" name="cep" />

	<label for="senha1">Senha</label>
	<input type="password" name="senha1" />

	<label for="senha2">Confirmar senha</label>
	<input type="password" name="senha2" />

	<button type="submit" class="btn secundario">Cadastrar</button>
</form>