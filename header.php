<!DOCTYPE html>
<html>
<head>
	<title>WordPalm</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CSS only -->
	<link rel="stylesheet" href="modules\node_modules\bootstrap\dist\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<!-- JS, Popper.js, and jQuery -->
	<script src="js/functions.js" type="text/javascript"></script>
	<script src="modules\node_modules\jquery\dist\jquery.js"></script>
	<script src="modules\node_modules\popper.js\dist\umd\popper.js"></script>
	<script src="modules\node_modules\bootstrap\dist\js\bootstrap.js"></script>
</head>
<div class="header-nav">
	<!-- Titulo -->
	<h2><a href="index.php" class="title menu-item">Worldpalm</a></h2>
	<div class="menu-options">
		<!-- Perfil icon -->
		<a href="perfil.php" class="menu-item" title="Perfil">Perfil</a>

		<!-- Top 10 icon -->
		<a href="top10.php" class="menu-item" title="Top 10">Top 10</a>

		<!-- Feed icon -->
		<a href="post.php" class="menu-item" title="Feed">Feed</a>

		<!-- Notificações icon-->
		<a href="#" class="dropdown menu-item" data-toggle="dropdown" title="Notificações">Notificações</a>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="#">Fulano curtiu você</a>
			<a class="dropdown-item" href="#">Sicrano olhou pra cima</a>
			<a class="dropdown-item" href="#">Fulana casou com fulano</a>
		</div>
		<!-- Config icon -->
		<a href="#" class="dropdown menu-item" data-toggle="dropdown" title="Configuração">Configuração</a>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="#">Reporte</a>
			<a class="dropdown-item" href="#">Termos e licenças</a>
			<a class="dropdown-item" href="#">Logout</a>
		</div>
	</div>
	<div class="busca">
		<form class="form-inline">
			<a href="cadastro.php" class="menu-item">Cadastro</a>
			<a href="login.php" class="menu-item">Login</a>
			<!-- Icone de busca-->
			<input class="form-control ml-4" type="search" placeholder="Buscar">
			<button class="btn btn-secondary" type="submit">Buscar</button>
		</form>
	</div>
</div>