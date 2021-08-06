<?php
	session_start();

	include "../conexao.php";
	
	$marca              = $_POST["marca"];
	$categoria 					= $_POST["categoria"];
	$descricao          = $_POST["descricao"];
	$destaque           = $_POST["destaque"];
	$preco              = $_POST["preco"];
	
	if( $_POST["action"] == "insert" ) {
		$sql = "INSERT INTO tb_anuncio (id_usuario, id_marca, id_categoria, descricao, destaque, preco)
				VALUES (" . $_SESSION['classiauto_user_id'] . ", $marca, $categoria, '$descricao', '$destaque', $preco)";

echo $sql;
		if( $result = mysqli_query($_conn, $sql)) {
			echo "O anúncio foi cadastrado com sucesso";
			Header("Location: ../?pg=user/meus_anuncios.php");
		}
		else {
			echo "Erro ao inserir anúncio: " . mysqli_error($_conn);
		}

		echo "<br/></br><a href=\"../?pg=anuncio/form.php&action=insert\">[VOLTAR]</a>";

	}
	
	
	
?>