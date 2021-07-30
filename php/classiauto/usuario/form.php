
<form action="usuario/user.controller.php" method="POST">
  <label for="nome">Nome</label>
  <input type="text" name="nome" placeholder="Fulano de Tal" />

  <label for="nascimento">Data de Nascimento</label>
  <input type="date" name="nascimento" />

  <label for="sexo">Sexo</label>
  <select name="sexo">
    <option value=""></option>
    <option value="F">Feminino</option>
    <option value="M">Masculino</option>
  </select>

  <label for="email">E-mail</label>
  <input type="mail" name="email" placeholder="fulano@provedor.com.br" />

  <label for="telefone">Telefone</label>
  <input type="tel" name="telefone" placeholder="(00) 99999-9999" />

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


  <button type="submit">Cadastrar</button>

</form>