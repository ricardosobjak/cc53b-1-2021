<h2>Meus anúncios</h2>

<?php
include "conexao.php";

$sql = "SELECT 
				 tb_anuncio.id,
				 tb_anuncio.descricao, 
				 tb_anuncio.destaque,
				 tb_anuncio.preco,
				 tb_anuncio.id_categoria,
				 tb_anuncio.id_marca,
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
					ON tb_anuncio.id_marca = tb_marca.id
			WHERE tb_anuncio.id_usuario = " . $_SESSION["classiauto_user_id"];



$result = mysqli_query($_conn, $sql);

?>

<table class="table">
	<tr>
		<th>Categoria</th>
		<th>Marca</th>
		<th>Destaque</th>
		<th>Descrição</th>
		<th></th>
	</tr>
	<?php
	while ($anuncio = mysqli_fetch_array($result)) :
	?>
		<tr>
			<td><?= $anuncio["categoria"] ?></td>
			<td><?= $anuncio["marca"] ?></td>
			<td><?= $anuncio["destaque"] ?></td>
			<td><?= $anuncio["descricao"] ?></td>
			<td class="text-end">

				<form action="." method="POST" style="display: inline;">
					<input type="hidden" name="pg" value="anuncio/form.php" />
					<input type="hidden" name="action" value="update" />
					<input type="hidden" name="id" value="<?= $anuncio["id"] ?>" />
					<input type="hidden" name="descricao" value="<?= $anuncio["descricao"] ?>" />
					<input type="hidden" name="destaque" value="<?= $anuncio["destaque"] ?>" />
					<input type="hidden" name="preco" value="<?= $anuncio["preco"] ?>" />
					<input type="hidden" name="categoria" value="<?= $anuncio["id_categoria"] ?>" />
					<input type="hidden" name="marca" value="<?= $anuncio["id_marca"] ?>" />
					<button class="bnt-action">Editar</button>
				</form>

				<form action="anuncio/controller.php" method="POST" style="display: inline;">
					<input type="hidden" name="action" value="delete" />
					<input type="hidden" name="id" value="<?= $anuncio["id"] ?>" />
					<button class="bnt-action">Excluir</button>
				</form>
			</td>
		</tr>
	<?php
	endwhile;
	?>


</table>