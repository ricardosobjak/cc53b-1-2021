<?php
	$user = "root";			//Vari�vel contendo o nome do usu�rio do MySql
	$pass = "";				//Vari�vel contendo a senha do usu�rio
	$host = "localhost";	//Vari�vel contendo o endere�o do servidor
	$db   = "db_classiauto";  		//Nome do Banco de Dados
	
	$_conn;				//Identificador da Conexao
	
	
	//Conectando-se ao servidor MySql
	$_conn = mysqli_connect($host, $user, $pass) or die("Erro na Conexão com o banco de Dados");
	

	//Selecinando a Base de dados que ser� usada
	mysqli_select_db($_conn, $db);
?>