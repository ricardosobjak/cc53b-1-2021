<h2>Cadastrar-se</h2>

<form action="user/controller.php" method="POST">
	<input type="hidden" name="action" value="<?php echo $_GET["action"]; ?>" />

	<label for="nome" class="form-label">Nome</label>
	<input type="text" name="nome" />

	<label for="nascimento" class="form-label">Data de Nascimento</label>
	<input type="date" name="nascimento" />

	<label for="sexo" class="form-label">Sexo</label>
	<select name="sexo">
		<option value="F">Feminino</option>
		<option value="M">Masculino</option>
	</select>

	<label for="email" class="form-label">E-mail</label>
	<input type="mail" name="email" />

	<label for="telefone" class="form-label">Telefone</label>
	<input type="tel" name="telefone" />

	<label for="cidade" class="form-label">Cidade</label>
	<input type="text" name="cidade" />

	<label for="estado" class="form-label">Estado</label>
	<input type="text" name="estado"  />

	<label for="pais" class="form-label">País</label>
	<input type="text" name="pais" placeholder="Brasil" />

	<label for="cep" class="form-label">CEP</label>
	<input type="text" name="cep"  />

	<label for="senha1" class="form-label">Senha</label>
	<input type="password" name="senha1" />

	<label for="senha2" class="form-label">Confirmar senha</label>
	<input type="password" name="senha2"  />


	<button type="submit">Cadastrar</button>

</form>