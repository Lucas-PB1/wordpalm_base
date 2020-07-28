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
	<nav id="my_nav" class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-primary">
		<h2><a class="navbar-brand h1 mb-0" href="?pg=home">Worldpalm</a></h2>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSite">

			<ul class="navbar-nav mr-auto">
				
				<li class="nav-item">
					<a class="nav-link" href="?pg=perfil"><span title="Perfil">
						<!-- Perfil icon -->
						<svg width="22px" height="22px" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
							<path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							<path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
						</svg></span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="?pg=top10"><span title="Top 10">
							<!-- Top 10 icon -->
							<svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
							</svg></span></a>
						</li>

						<li class="nav-item" >
							<a class="nav-link" href="#"><span title="Feed">
								<!-- Feed icon -->
								<svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-suit-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 6.236l.894-1.789c.222-.443.607-1.08 1.152-1.595C10.582 2.345 11.224 2 12 2c1.676 0 3 1.326 3 2.92 0 1.211-.554 2.066-1.868 3.37-.337.334-.721.695-1.146 1.093C10.878 10.423 9.5 11.717 8 13.447c-1.5-1.73-2.878-3.024-3.986-4.064-.425-.398-.81-.76-1.146-1.093C1.554 6.986 1 6.131 1 4.92 1 3.326 2.324 2 4 2c.776 0 1.418.345 1.954.852.545.515.93 1.152 1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
								</svg></span></a>
							</li>
							<div>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown" href="#" data-toggle="dropdown" id="nav-drop"><span title="Notificações">
										<!-- Notificações icon-->
										<svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-bell" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
											<path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
										</svg></span></a>
										<div class="dropdown-menu notify">
											<a class="dropdown-item" href="?pg=post">Fulano curtiu você</a>
											<a class="dropdown-item" href="#">Sicrano olhou pra cima</a>
											<a class="dropdown-item" href="#">Fulana casou com fulano</a>
										</div>
									</li>
								</div>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown" href="#" data-toggle="dropdown" id="nav-drop"><span title="Configuração">
										<!-- Config icon -->
										<svg width="22px" height="22px" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
											<path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
										</svg></span></a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#">Reporte</a>
											<a class="dropdown-item" href="#">Termos e licenças</a>
											<a class="dropdown-item" href="#">Logout</a>
										</div>
									</li>
								</ul>
								<form class="form-inline ml-auto" action="#">
									<input class="form-control ml-4" type="search" placeholder="Buscar">
									<!-- Icone de busca-->
									<button class="btn btn-secondary" type="submit"><svg width="20px" height="18px" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
										<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									</svg></button>
								</form>
							</div>
						</div>
					</nav>
				</div>
			</body>
			</html>
