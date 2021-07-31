<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
?>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilo.css">
	<title>ClassiAuto</title>
</head>

<body>
	<header>
		<a href="./"><img src="images/logo.png" alt="ClassiAuto" /></a>

		<nav>
			<ul>
				<li><a href="?pg=user/form.php&action=insert">Cadastrar-se</a></li>

				<?php
				if (isset($_SESSION["classiauto_user_nome"]) and isset($_SESSION["classiauto_user_email"])) :
				?>
					<li><a href="logout.php">Logout</a></li>
				<?php
				else :
				?>
					<li><a href="?pg=login.php">Login</a></li>
				<?php
				endif;
				?>
			</ul>
		</nav>
	</header>


	<nav class="principal">
		<?php include "menu.php"; ?>
	</nav>

	<aside>
		<p>Seja bem vindo <b><?php echo $_SESSION["classiauto_user_nome"]; ?></b> ao Classiauto.
		</p>

	</aside>

	<main>
		<?php
		if ($_REQUEST["pg"])
			include $_REQUEST["pg"];
		else
			include 'anuncio/lista.php';

		?>
	</main>

	<footer>
		<div>Todos os direitos reservados a ClassiAuto</div>
		<div>UTFPR - Campus Medianeira</div>
	</footer>
</body>

</html>