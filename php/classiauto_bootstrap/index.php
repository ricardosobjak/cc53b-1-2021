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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<title>ClassiAuto</title>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a href="./"><img src="images/logo.png" alt="ClassiAuto" /></a>

				<div class="d-flex">
					<?php
					if (isset($_SESSION["classiauto_user_nome"]) and isset($_SESSION["classiauto_user_email"])) :
					?>
						<a href="logout.php" class="btn btn-outline-danger">Logout</a>
					<?php
					else :
					?>
						<a href="?pg=login.php" class="btn btn-outline-success">Login</a>
					<?php
					endif;
					?>

					<a href="?pg=user/Form.php&action=insert" class="btn btn-outline-secondary ms-2">Cadastrar-se</a>
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