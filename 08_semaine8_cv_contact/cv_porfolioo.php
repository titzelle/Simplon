<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>CV Porfolio</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.min.css" type="text/css"/>
	<link rel="stylesheet" href="css/cv_portfolio.css">

</head>
<body>
<div class="container-fluid">
	<header>
		<div class="row">
			<div class="image col-md-6">
				<img src="img/profil.jpg" alt="photo de profil Emmanuelle Hommet ">
			</div>
			<div class="entete col-md-6">
				<h1> Emmanuelle Bersez Hommet</h1>
				<h2>Développeur Front Junior</h2>
			</div>
		</div>
<!--		<nav>-->
<!--			<ul>-->
<!--				<li><a href="#">Home</a></li>-->
<!--				<li class="active"><a href="#">About</a></li>-->
<!--				<li><a href="#">Portfolio</a></li>-->
<!--				<li><a href="#">Contact</a></li>-->
<!--			</ul>-->
<!--		</nav>-->

	</header>

	<main>
		<div class="row">
			<div class="col-md-3">
				<div class="conteneur">
					<h3>Profil professionnel</h3>

					<p>En voie de réorientation vers la programmation et gestion de projet de site web, l'expérience
						acquise dans le monde du travail me permet d'associer un sérieux professionnel à une réelle
						passion.
						<br/> L'Internet est un lieu magique basé sur le partage et l'apprentissage. Son potentiel est
						aujourd'hui inestimable. Travailler sur ce média implique de suivre la rapidité des innovations
						et la multiplication exponentielle des
						connaissances. Je trouve ce challenge grisant et enthousiasmant.
						<br/> Mon objectif est aujourd'hui de devenir web programmeur et chef de projet tout en
						dispensant plusieurs heures d'enseignement ou de la formation par semaine afin de garder et
						développer ce rapport humain et social qui m'est
						précieux.
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="conteneur">
					<h3>Projets en cours</h3>

					<p>
						Créateur - Administrateur - Auteur de : <br/>
						<a href="http://loeildelexpat.com">L'oeil de l'Expat _ Réussir son expatriation en
							Allemagne </a>
					</p>
					<ul>
						<li>Site développé avec le CMS Wordpress</li>
						<li>Optmisation du référencement</li>
					</ul>
					<p> Co-créateur - co-administrateur - référente du groupe développement du site communautaire<br/>
						<a href="http://www.road-web.fr">Road-web _ Evoluer dans les métiers du Web </a>
					</p>
					<ul>
						<li>Html - Css - Javascript</li>
						<li>Php _ Framework Laravel</li>
					</ul>
				</div>
			</div>

			<div class="col-md-3">
				<div class="conteneur">
					<h3>Diplômes et formations</h3>

					<p>2015 : Etudiante à <i>Simplon (Ecole Numérique de Codeur)</i>
						<br>
						<strong>Développeur Front End /Back end</strong></p>
					<ul>
						<li> * Javascript : Js Node, Js ...</li>
						<li> * Js</li>
						<li> * Ruby</li>
						<li> * Css Framework : Bootstrap</li>
					</ul>
					<br/>

					<p>2013-2015 : Etudiante à <i>l'Emweb (Ecole de formation aux métiers du Web)</i>
						<br>
						<strong>Développeur Front End / Back end</strong></p>
					<ul>
						<li> * Html /css</li>
						<li> * Javascript</li>
						<li> * Php</li>
						<li> * Cms : Wordpress</li>
					</ul>
					<p>2014 : Diplôme niveau B2 Allemand</p>

					<p>1999 : Diplôme de professeur des écoles</p>

					<p>1998 : littérature et civilisation anglophone</p>

					<p>1994 : Bac Scientifiques Mathématiques</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="conteneur">
					<h3>Emplois</h3>

					<p>2012-2015 : Formatrice pour adulte à <i>l'école internationale de Augsburg
							(Allemagne)</i></p>

					<p>2012-2015 : Enseignante à <i>l'école internationale de Augsburg (Allemagne)</i></p>

					<p>1999-2012 : Enseignante à <i>l'Education Nationale Française</i></p>

					<p> Grâce à mes 15 ans d'expérience dans le domaine de l'enseignement et de la formation, je sais
						aujourd'hui :</p>
					<ul>
						<li> * Gérer et motiver une équipe</li>
						<li> * Mener un projet</li>
						<li> * Etablir, trouver et respecter un budget</li>
						<li>* Etablir et respecter un planning</li>
					</ul>
					<br/>
					<h4>Expériences internationales</h4>

					<p>1994-1995 : Londres</p>

					<p>2007-2008 : Corée du Sud</p>

					<p> 2012-2015 : Allemagne</p>
				</div>
			</div>
		</div>
		<div class="container"><!--/Container portfolio-->
			<h2>Mon portfolio</h2>
			<ul id="filters" class="clearfix row">
				<li><span class="filter active" data-filter="cat1 cat2 cat3 cat4 cat5 cat6">Toutes les catégories</span>
				</li>
				<li><span class="filter" data-filter="cat1">Html/css</span></li>
				<li><span class="filter" data-filter="cat2">Javascript</span></li>
				<li><span class="filter" data-filter="cat3">Bootstrap</span></li>
				<li><span class="filter" data-filter="cat4">Ruby</span></li>
				<li><span class="filter" data-filter="cat5">Php/Laravel</span></li>
				<li><span class="filter" data-filter="cat6">Wordpress</span></li>
			</ul>

			<div id="portfoliolist">
				<div class="portfolio cat1" data-cat="cat1">
					<div class="portfolio-wrapper">
						<img src="img/html_css.jpg" alt="logo html et css">

						<div class="label">
							<div class="label-text">
								<a class="text-title">Annuaire</a>
								<span class="text-category">Html/css</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat2" data-cat="cat2">
					<div class="portfolio-wrapper">

						<img src="img/js.jpg" alt="logo js">

						<div class="label">
							<div class="label-text">
								<a class="text-title">Projet Javascript</a>
								<span class="text-category">Javascript</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat3" data-cat="cat3">

					<div class="portfolio-wrapper">
						<img src="img/bootstrap.jpg" alt="exercice des divs">

						<div class="label">
							<div class="label-text">
								<a href="https://github.com/titzelle/Semaine6/blob/master/divdiv.html"
								   class="text-title">Grille bootstrap</a>
								<span class="text-category">Bootstrap</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat4" data-cat="cat4">
					<div class="portfolio-wrapper">
						<img src="img/chifoumi.png" alt="jeu du chifoumi">

						<div class="label">
							<div class="label-text">
								<a class="text-title">Titre de mon projet avec Ruby</a>
								<span class="text-category">Ruby</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat5" data-cat="cat5">

					<div class="portfolio-wrapper">
						<img src="img/road-web.jpg" alt="">

						<div class="label">
							<div class="label-text">
								<a class="text-title">Tic-Tac-Toe</a>
								<span class="text-category">Javascript</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				<div class="portfolio cat6" data-cat="cat6">
					<div class="portfolio-wrapper">
						<img src="img/Loeildelexpat.jpg" alt="loeildelexpat.com"/>

						<div class="label">
							<div class="label-text">
								<a class="text-title">L'Oeil de
									l'Expat</a>
								<span class="text-category">Wordpress</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
			</div>
		</div> <!--/Container portfolio-->
	</main>
	<footer>
		<div class="container">
			<div class="contactinfo1 col-md-4">
				<p>Emmanuelle Bersez Hommet</p>
				<p>Am Schaefflerbach 4</p>
				<p>86153 Augsbourg</p>
				<p>ALLEMAGNE </p>
			</div>
			<div class="formgroup col-md-4"> <!--Formulaire de contact-->
				<form role="form" action="post_contact.php" method="post">
					<?php
					if ( isset ( $_SESSION['errors'] ) ) : ?>
						<div class="alert alert-danger">
							<?= implode( '<br/>', $_SESSION['errors'] ) ?>
						</div>

						<?php unset( $_SESSION['errors'] );
					endif ?>
					<h3>Me contacter</h3>
					<label for="name" class="sr-only">x</label>
					<input class="form-control" type="text" name="name" id="name" placeholder="Votre nom">
					<label for="mail" class="sr-only">x</label>
					<input class="form-control" type="email" name="mail" id="mail" placeholder="Votre email">
					<label for="message" class="sr-only">x</label>
                    <textarea class="form-control" name="message" id="message" cols="30" rows="5"
                              placeholder="Votre message"></textarea>
					<input type="submit" value="ENVOYER">
				</form>
			</div>
			<div class="contactinfo2 col-md-4">
				<p>Tél : 0049 176 84 81 95 33</p>
				<p>Mail: pseudoups@hotmail.fr</p>
				<p><a href="https://de.linkedin.com/in/emmanuellebh ">
						<i class="fa fa-linkedin-square fa-2x "></i>
					</a>
					<a href="https://github.com/titzelle">
						<i class="fa fa-github-square fa-2x "></i>
					</a></p>
			</div>
		</div>
	</footer>
</div>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js "></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js "></script>
<script type="text/javascript" src="js/jquery.mixitup2.min.js "></script>
</body>
</html>