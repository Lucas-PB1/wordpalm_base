<!-- O include do topo -->
<?php include_once("header.php");
#conteudo
if(empty($_SERVER["QUERY_STRING"])){
	#Coloque de de $var sua página inicial
	$var = "login.php";
	include_once("$var");
}else{
	$pg = $_GET['pg'];
	#pg, é a sua referencia para páginas
	include_once("$pg.php");
}
include_once("footer.php") ?>
<!-- O include do rodapé -->