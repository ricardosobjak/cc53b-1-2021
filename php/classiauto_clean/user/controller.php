<?php
include "../conexao.php";

$action = $_POST["action"];
$dados = $_POST;

if ($action == "insert") {
	if ($dados["nome"] == "") {
		echo "<div>O nome não foi informado!</div>";
		exit;
	}
	if ($dados["email"] == "") {
		echo "<div>O email deve ser informado!</div>";
		exit;
	}
	if ($dados["senha1"] == "") {
		echo "<div>Senha Não Informada</div>";
		exit;
	}
	if ($dados["senha1"] != $dados["senha2"]) {
		echo "<div>As Senhas devem ser iguais</div>";
		exit;
	}

	$sql = "INSERT INTO tb_usuario (
				  nome,
				  nascimento,
				  sexo,
				  cidade,
				  uf,
				  pais,
				  email,
				  telefone,
				  senha
				) 
				VALUES (
				  '" . $dados["nome"] . "',
				  '" . $dados["nascimento"] . "',
				  '" . $dados["sexo"] . "',
				  '" . $dados["cidade"] . "',
				  '" . $dados["estado"] . "',
				  '" . $dados["pais"] . "',
				  '" . $dados["email"] . "',
				  '" . $dados["telefone"] . "',
				  '" . $dados["senha1"] . "'
				)";

	if ($result = $_conn->query($sql)) {
		echo "O seu cadastro foi efetivado com sucesso";
		Header('Location: ../?pg=login.php&msg=Usuário cadastrado com sucesso!');
	} else {
		echo "Erro ao Inserir Usuário. ";
		echo "(" . $_conn->error . ")";
	}
}
echo "<br/></br><a href=\"../?pg=user/form.php&action=insert\">[VOLTAR]</a>";
