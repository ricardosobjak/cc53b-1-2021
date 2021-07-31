<?php
include "verifica.php";
include "conexao.php";


$fCategoria = $_REQUEST["categoria"];
$fMarca = $_REQUEST["marca"];
$fDestaque  = $_REQUEST["destaque"];
$fPreco     = $_REQUEST["preco"];
$fDescricao = $_REQUEST["descricao"];
?>

<h2>Novo anúncio</h2>

<form action="anuncio/controller.php" method="POST">
	<input type="hidden" name="action" value="<?= $_REQUEST["action"] ?>" />
	<input type="hidden" name="pg" value="anuncio/form.php" />

	<?php
	if ($_REQUEST["action"] == 'update') :
	?>
		<input type="hidden" name="id" value="<?= $_REQUEST["id"] ?>" />
	<?php endif; ?>

	<label>Categoria</label>
	<select name="categoria">
		<option value=""></option>
		<?php
		$sql = "SELECT * FROM tb_categoria ORDER BY nome";
		$result = mysqli_query($_conn, $sql);
		while ($cat = mysqli_fetch_array($result)) :
		?>
			<option value="<?= $cat["id"] ?>" <?= ($cat["id"] == $fCategoria) ? "selected" : "" ?>><?= $cat["nome"] ?></option>
		<?php
		endwhile;
		?>
	</select>

	<label>Marca</label>
	<select name=" marca">
		<option value=""></option>
		<?php
		$sql = "SELECT * FROM tb_marca ORDER by nome";

		$result = mysqli_query($_conn, $sql);
		while ($marca = mysqli_fetch_array($result)) :
		?>
			<option value="<?= $marca["id"]; ?>" <?= ($marca["id"] == $fMarca) ? "selected" : "" ?>><?= $marca["nome"]; ?></option>
		<?php
		endwhile;
		?>

	</select>


	<label for="">Destaque</label>
	<input type="text" name="destaque" value="<?= $fDestaque ?>" />

	<label for="">Preço</label>
	<input type="number" name="preco" value="<?= $fPreco ?>" />

	<label for="">Descrição</label>
	<textarea name="descricao"><?= $fDescricao ?></textarea>

	<button type="submit" class="btn secundario">Confirmar</button>
</form>