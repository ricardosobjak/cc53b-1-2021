<?php
//INICIALIZA A SESS�O
//session_cache_expire(1);

//SE N�O TIVER VARI�VEIS REGISTRADAS
//RETORNA PARA A TELA DE LOGIN
if( (!isset($_SESSION["classiauto_user_nome"])) || (!isset($_SESSION["classiauto_user_email"]))) {
	Header("Location: content.php?pg=login.php");
	echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"0; URL=content.php?pg=login.php\">";
	exit;
}
?>
