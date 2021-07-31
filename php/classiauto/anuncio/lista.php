<h2>Anúncios</h2>

<?php
	include "conexao.php";
	
	$sql = "SELECT 
				 tb_anuncio.id,
				 tb_anuncio.descricao, 
				 tb_anuncio.destaque,
				 tb_categoria.nome AS categoria,
				 tb_marca.nome AS marca,
				 tb_usuario.nome,
				 tb_usuario.telefone
			FROM 
				tb_anuncio
				INNER JOIN tb_usuario
					ON tb_anuncio.id_usuario = tb_usuario.id
				INNER JOIN tb_categoria
					ON tb_anuncio.id_categoria = tb_categoria.id
				INNER JOIN tb_marca
					ON tb_anuncio.id_marca = tb_marca.id";
	
	if( $_GET["categoria"] ) {
		$sql .= " WHERE id_categoria = " . $_GET["categoria"];
	}
		
	$result = mysqli_query($_conn, $sql);
	
	while($anuncio = mysqli_fetch_array($result)) :
		echo "<span class='marca'>" . $anuncio["categoria"] . " - " .  $anuncio["marca"] . "</span>";

		echo "<span class='destaque'> " . $anuncio["destaque"] . "</span>.";
		echo "<span> " . $anuncio["descricao"] . "</span>.";
		echo "<span class='contato'> Tratar " . $anuncio["telefone"] . " com " . $anuncio["nome"] . "</span>";
		echo "<hr/>";
	endwhile;
?>
