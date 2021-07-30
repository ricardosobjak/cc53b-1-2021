<?php
  $user = "root"; // Nome do usuário do MySQL;
  $pass = ""; // Senha do Mysql
  $host = "localhost"; // Host onde o Mysql está instalado
  $db = "db_classiauto";

  // Conectar ao Servidor Mysql, estabelecer a conexão
  $_conn =  mysqli_connect($host, $user, $pass);

  // Selecionar um banco de dados
  mysqli_select_db($_conn, $db);
?>