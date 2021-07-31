<?php
	$usuario = trim( $_POST["usuario"] );
	$senha = trim( $_POST["senha"] );
	
	if($usuario == "" || $senha == "") {
		Header("Location: ./?pg=login.php&msg=Usu�rio e ou Senha n�o informados!");
	}
	
	include "conexao.php";
	
	$sql = "SELECT distinct id, nome, email, senha FROM tb_usuario
			WHERE email = '$usuario' AND senha = '$senha'";
	
	$result = mysqli_query($_conn, $sql);
	
	
	if( mysqli_num_rows($result) > 0) {
		$user = mysqli_fetch_array($result);
		
		session_start();
		
		$_SESSION["classiauto_user_id"]  =  $user["id"];
		$_SESSION["classiauto_user_nome"]  =  $user["nome"];
		$_SESSION["classiauto_user_email"]  =  $user["email"];
		
		Header("Location: .");
	}
	else {
		Header("Location: ./?pg=login.php&msg=Usuário e ou Senha Inválidos!");
	}
