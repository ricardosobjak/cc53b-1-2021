<!DOCTYPE html>
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
    <h1><img src="images/logo.png" alt="ClassiAuto" /></h1>

    <nav>
      <ul>
        <li><a href="?pg=login.php">Login</a></li>
        <li><a href="?pg=usuario/form.php">Cadastre-se</a></li>
      </ul>
    </nav>
  </header>

  <nav class="principal">
    <?php include 'menu.php'; ?>
  </nav>

  <main>
    <?php
    if ($_GET['pg'])
      include $_GET['pg'];
    ?>
  </main>

  <footer>
    Todos os diretos reservados a @ClassiAuto 2021.
  </footer>

</body>

</html>