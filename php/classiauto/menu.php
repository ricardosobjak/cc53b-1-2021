
<div class="titulo">
  Meus Links
</div>
<ul>
  <li><a href="#">Anúncios</a></li>
  <li><a href="#">Quero anunciar</a></li>
</ul>


<div class="titulo">
  Categorias
</div>
<ul>
  <?php
    include 'conexao.php';

    $sql = "SELECT * from tb_categoria ORDER BY nome";

    $result = mysqli_query($_conn, $sql);

    while($cat = mysqli_fetch_array($result)) :
  ?>
  <li><a href="#"><?= $cat["nome"] ?></a></li>
  <?php 
    endwhile;
  ?>
</ul>