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
		<nav>
			<div>
				<a href="./"><img src="images/logo.png" alt="ClassiAuto" /></a>

				<div class="d-flex">
					<?php
					if (isset($_SESSION["classiauto_user_nome"]) and isset($_SESSION["classiauto_user_email"])) :
					?>
						<a href="logout.php">Logout</a>
					<?php
					else :
					?>
						<a href="?pg=login.php">Login</a>
					<?php
					endif;
					?>

					<a href="?pg=user/Form.php&action=insert">Cadastrar-se</a>
				</div>
			</div>
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
		if ($_GET["pg"])
			include $_GET["pg"];
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