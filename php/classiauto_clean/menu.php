<br />
<?php
if (isset($_SESSION["classiauto_user_nome"]) and isset($_SESSION["classiauto_user_email"])) :
?>
	<div class="titulo">Meus links</div>
	<ul >
		<li><a href="?pg=user/meus_anuncios.php">Anúncios</a></li>
		<li><a href="?pg=anuncio/form.php&action=insert">Quero anunciar</a></li>
	</ul>

	<br />
<?php
endif;
?>


<ul>
<div class="titulo">Categorias</div>
	<?php
	include "conexao.php";

	$sql = "SELECT * FROM tb_categoria ORDER BY nome";

	$result = mysqli_query($_conn, $sql);

	while ($usuario = mysqli_fetch_array($result)) :
	?>
		<li><a href="?pg=anuncio/lista.php&categoria=<?php echo $usuario["id"]; ?>"><?php echo $usuario["nome"]; ?></a></li>
	<?php
	endwhile;
	?>
</ul>