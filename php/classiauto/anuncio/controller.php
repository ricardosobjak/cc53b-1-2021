<?php
session_start();

$action = $_REQUEST['action'];

include "../conexao.php";

if ($action == 'insert' || $action == 'update') {

	$marca              = $_POST["marca"];
	$categoria 					= $_POST["categoria"];
	$descricao          = $_POST["descricao"];
	$destaque           = $_POST["destaque"];
	$preco              = $_POST["preco"];

	/**
	 * Caso a ACTION seja "insert" (inserir um anúncio)
	 */
	if ($action == "insert") {
		$sql = "INSERT INTO tb_anuncio (id_usuario, id_marca, id_categoria, descricao, destaque, preco)
					VALUES (" . $_SESSION['classiauto_user_id'] . ", $marca, $categoria, '$descricao', '$destaque', $preco)";

		if ($result = mysqli_query($_conn, $sql))
			Header("Location: ../?pg=user/meus_anuncios.php");
		else
			echo "Erro ao inserir anúncio: " . mysqli_error($_conn);


		echo "<br/></br><a href=\"../?pg=anuncio/form.php&action=insert\">[VOLTAR]</a>";
	}
	/**
	 * Caso a ACTION seja "update" (atualizar um anúncio)
	 */
	else {
		$id = $_POST["id"];

		$sql = "UPDATE tb_anuncio 
						SET id_marca = $marca, 
						id_categoria = $categoria, 
						descricao = '$descricao', 
						destaque = '$destaque', 
						preco = $preco 
						WHERE id = $id";

		if ($result = mysqli_query($_conn, $sql))
			Header("Location: ../?pg=user/meus_anuncios.php");
		else
			echo "Erro ao atualizar anúncio: " . mysqli_error($_conn);
	}
}
/**
 * Caso a ACTION seja "delete" (deletar um anúncio)
 */
else if ($action == "delete") {
	$sql = "DELETE FROM tb_anuncio WHERE id = " . $_POST["id"];

	if ($result = mysqli_query($_conn, $sql))
		Header("Location: ../?pg=user/meus_anuncios.php");
	else
		echo "Erro ao deletar anúncio: " . mysqli_error($_conn);
} else {
	echo "Ação inválida ($action)";
}

echo "<br/></br><a href=\"../?pg=anuncio/form.php&action=insert\">[VOLTAR]</a>";
