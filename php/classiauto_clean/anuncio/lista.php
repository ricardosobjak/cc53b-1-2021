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

if ($_GET["categoria"]) {
	$sql .= " WHERE id_categoria = " . $_GET["categoria"];
}

$result = mysqli_query($_conn, $sql);
?>

<?php
while ($anuncio = mysqli_fetch_array($result)) :
?>

	<div style="width: 18rem; border: 1px solid #000">
		<div>
			<b><?= $anuncio["destaque"] ?></b>
		</div>
		<img src="images/car.svg">
		<div class="card-body">
			<p>
				<?= $anuncio["categoria"] ?> | <?= $anuncio["marca"] ?>
			</p>
			<p>
				<?= $anuncio["descricao"] ?>
			</p>
		</div>
		<div>
			<span>Contato: <?= $anuncio["nome"] ?> (<?= $anuncio["telefone"] ?>)</span>
		</div>
	</div>
<?php
endwhile;
?>