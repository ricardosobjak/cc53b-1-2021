<?php
if ($_POST["senha1"] != $_POST["senha2"]) {
  echo "As senhas não conferem!";
} else {

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
  ) VALUES (
    '" . $_POST["nome"] . "',
    '" . $_POST["nascimento"] . "',
    '" . $_POST["sexo"] . "',
    '" . $_POST["cidade"] . "',
    '" . $_POST["estado"] . "',
    '" . $_POST["pais"] . "',
    '" . $_POST["email"] . "',
    '" . $_POST["telefone"] . "',
    '" . $_POST["senha1"] . "'
  )";

  echo $sql;

  include '../conexao.php';
  //if($result =  mysqli_query($_conn, $sql)) {
  if ($result = $_conn->query($sql)) {
    echo "O seu cadastro foi efetivado com sucesso.";
  } else {
    echo "Erro ao cadastrar usuário.";
  }
}
