<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="../resources/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../resources/css/galerie.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="../resources/css/font-awesome.min.css">

	<script src="resources/js/menu.js"></script>



	<title>A Space Story | Space Box</title>
</head>
<body>


<div id="wrapper">
	<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1>Le Jeu</h1>
		</div>


			<!-- // MENU // --> 
			<div id="menu">
				<ul class="niv1">
					<li><a href="../index.html">Accueil</a></li>

					<li> <!-- Onglet "Le jeu" -->
						<a href="#">Le jeu</a>
							<ul class="niv2">
								<li><a href="../leJeu.jar">Télécharger</a></li>
								<li><a href="univers.html">Univers</a></li>
								<li class="current-page"><a href="">Galerie</a></li>
							</ul>
					</li>

					<li> <!-- Onglet "Documentation" -->
						<a href="#">Documentation</a>
						<ul class="niv2">
							<li><a href="../documentation/wiki.html">Wiki</a></li>
							<li><a href="../documentation/doxygen/index.html" target="blank">Doc Technique</a></li>
							<li><a href="https://github.com/SpaceBoxInk" target="blank">GitHub      <i class="fa fa-external-link" aria-hidden="true"></i></a></li>
						</ul>
					</li>

					<li><a href="../contact.html">Contact</a></li>
				</ul>
			</div>
			<!-- // FIN MENU // -->
		</div>
	</div>

	<div id="short-banner">
		<div class="container">
			<div class="title">
				<h2>Galerie d'images</h2>
			</div>
		</div>
	</div>

	<div class="white-bg">
		<div class="container">


			<?php

				if ($dossier = opendir("galerie/")){

					while (false != ($fichier = readdir($dossier))){

						if ($fichier != '.' && $fichier != '..'){
							echo "<a href=\"galerie/$fichier\" target=\"blank\"><img src=\"galerie/$fichier\" title=\"$fichier\"></a>";
						}


					}

					closedir($dossier);

				}

			?>

		</div>
	</div>

</div>

<footer></footer>

</body>
</html>