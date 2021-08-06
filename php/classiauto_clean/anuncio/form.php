<?php
include "verifica.php";
include "conexao.php";


$fCategoria = $_GET["categoria"];
$fDestaque  = $_GET["destaque"];
$fPreco     = $_GET["preco"];
$fDescricao = $_GET["descricao"];
?>

<h2>Novo anúncio</h2>

<form action="anuncio/anuncio.controller.php" method="POST" name="form1" id="form1">

	<input type="hidden" name="action" value="<?php echo $_GET["action"]; ?>" />
	<input type="hidden" name="pg" value="anuncio/form.php" />

	<label>Categoria</label>
	<select name="categoria">
		<option value=""></option>
		<?php
		$sql = "SELECT * FROM tb_categoria ORDER BY nome";
		$result = mysqli_query($_conn, $sql);
		while ($cat = mysqli_fetch_array($result)) :
		?>
			<option value="<?php echo $cat["id"]; ?>" <?php echo ($fCategoria == $cat["id"]) ? "selected" : "" ?>><?php echo $cat["nome"]; ?></option>
		<?php
		endwhile;
		?>
	</select>

	<label>Marca</label>
	<select name="marca">
		<option value=""></option>
		<?php
		$sql = "SELECT * FROM tb_marca ORDER by nome";

		$result = mysqli_query($_conn, $sql);
		while ($cat = mysqli_fetch_array($result)) :
		?>
			<option value="<?php echo $cat["id"]; ?>"><?php echo $cat["nome"]; ?></option>
		<?php
		endwhile;
		?>

	</select>


	<label for="">Destaque</label>
	<input type="text" name="destaque" value="<?php echo $fDestaque; ?>" />

	<label for="">Preço</label>
	<input type="number" name="preco" value="<?php echo $fPreco; ?>" />

	<label for="">Descrição</label>
	<textarea name="descricao"><?php echo $fDescricao; ?></textarea>

	<button type="submit">Confirmar</button>
</form>