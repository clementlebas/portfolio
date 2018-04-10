<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="author" content="Clement">
	<title>Clément Le Bas - Portfolio</title>
	<!-- CSS -->	
	<!-- 
	Bootstrap 
    <link rel="stylesheet" href="./css/bootstrap-reboot.min.css" type="text/css">    
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css" type="text/css">
	<link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
	-->
	<!-- lien vers la police-->
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/popup.css">
	<link rel="icon"href="./image/favicon.png" />
	<link rel="stylesheet" media="screen and (max-width: 600px)" href="./css/portable.css" />
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="./css/medium1.css" />
	
	<link rel="stylesheet" type="text/css" href="./css/style.css">	
	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="./js/bootstrap.min.js"></script> -->
	<script src="./js/responsive.js"></script>
	<script src="./js/anime_scroll.js"></script>
	<script src="./js/popup.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">





	

</head>


<body>
	<!-------------------------------------------------ACCUEIL -------------------------------------------------------------------->
	<header id="accueil">
		<h2 align="right" class="titre">Clément Le Bas - Apprenti Développeur</h2>
		<img class="icone" src="./image/icone.png" alt="icone clb">
	</header>

	<div id="nav-fixe" class="topnav">
		<a  href="#accueil"class="nav"><b>Accueil</b></a>
		<a href="#competences" class="nav"><b>Compétences</b></a>
		<a href="#diplomes" class="nav"><b>Diplômes</b></a>
		<a href="#experiences" class="nav"><b>Expériences</b></a>
		<a href="#contact" class="nav"><b>Contact</b></a>
		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>	
	</div>


		

	<div class="apropos">
	<!-- A PROPOS DE MOI-->
		<img src="./image/genius.jpg" alt="genie en action" class="genius">
		<h3 class="titreP">à propos de moi</h3>
		<p class="presentation">Je m'appelle Clément Le Bas, j'ai 25 ans. Passionné d'informatique, j'ai fait ce portfolio dans le but de me présenter ainsi que pour m'excercer en langage HTML et CSS. <br>Je suis actuellement à la recherche d'un stage d'une durée de 10 semaines à partir du mois de Juin. Pour toutes questions à mon sujet, ou pour obtenir un renseignement vous pouvez me contacter en <a class="verscontact" href="#contact"> cliquant ici.</a></p>
	</div>

	<script>
		function myFunction() {
			var x = document.getElementById("nav-fixe");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>

	<hr class="hr1">

	<!-- -------------------------------------------------BLOC COMPETENCE -------------------------------------------------------------------------------------------->

	<div id="competences">
		<h3>Mes compétences</h3>
		<div class="bloc-top">
			<div class="bloc" id="projet">
				<div class="titlebloc">
					<img class="icolang web" src="./image/htmlcss.png" alt="html et css">
					<p>
					Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus nobis.
					</p>
					<p> 
						<span class="popup-projet" data-popup="js"> Projet en JS </span> 
					</p>
				</div>
			</div>
	<!-- ---------------------------------------------- POPUP ----------------------------------------- -->
		
		<div id="popup-js" class="popup">
			
			<span class="fermer">X</span>
			<img class="triangle" src="./image/triangle.png" alt="triangle">
			<h2>
				<img src="#" alt="convertisseur" class="photo">
				Convertisseur de numération
			</h2>
			<hr>
			<br>
			<p>Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicanti</p>
			<br>
			<p> 
				<a href="..." > Code </a> | <a href="..."> Testez le ! </a> 
			</p>

		</div>
	<!-- -----------------------------------------------FIN POPUP------------------------------- -->

		<div class="bloc" id="projet">
			<div class="titlebloc">
				<img class="icolang" src="./image/langagec.png" alt="langage c">
				<p>
				Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus nobis.
				</p>
				<p> 
					<span class="popup-projet" data-popup="c"> Projet en C </span> 
				</p>
			</div>
		</div>

		<!-- ---------------------------------------------- POPUP ----------------------------------------- -->
		
		<div id="popup-c" class="popup">
			
			<span class="fermer">X</span>
			<img class="triangle" src="./image/triangle.png" alt="triangle">
			<h2>
				<img src="./image/convertisseur.png" alt="convertisseur" class="photo">
				Convertisseur de numération
			</h2>
			<hr>
			<br>
			<p>Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicanti</p>
			<br>
			<p> <a href="..." > Code </a> | <a href="..."> Testez le ! </a> </p>

		</div>

		<!-- -----------------------------------------------FIN POPUP ------------------------------- -->	
		<div class="bloc" class="selected">
			<div class="titlebloc">
				<img class="icolang" src="./image/php.png" alt="langage c">
				<p>
					Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus
					nobis.
				</p>
			</div>
		</div>

		<hr class="hr2">
	</div>
		
		
		
		<div class="bloc-second">
			<div class="bloc">
				<div class="titlebloc">
					<img class="icolang" src="./image/sql.png" alt="html et css">
					<p>
						Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus
						nobis.
					</p>
				</div>
			</div>
			
			<div class="bloc" id="projet">
				<div class="titlebloc">
					<img class="icolang" src="./image/java.png" alt="java">
					<p>Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus nobis.	</p>
					<p>
						<span class="popup-projet" data-popup="java">Projet en JAVA</span>
					</p>
				</div>
			</div>
			
				<!-- ---------------------------------------------- POPUP ----------------------------------------- -->

			<div id="popup-java" class="popup" >
				
				<span class="fermer">X</span>
				<img class="triangle" src="./image/triangle.png" alt="triangle">
				<h2>
					<img src="./image/....png" alt="" class="photo"> Album photo
				</h2>
				<hr>
				<br>
				<p>Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicanti</p>
				<br>
				<p>
					<a href="..."> Code </a> |
					<a href="..."> Testez le ! </a>
				</p>
			</div>
				<!-- -----------------------------------------------FIN POPUP------------------------------- -->

		</div>
	</div>

	<!---------------------------------------------------- DIPLOME ------------------------------------------------------------------>

	<div class="diplomes" id="diplomes">
		
		<h3>Mes diplômes</h3>

		<div class="timeline">
		
			<section class="timeline-item">
				<a class="timeline-item-details" > 
					<time datetime="2017-12-07" class="timeline-item-details-date"> Depuis Oct. 2017</time>
					<div class="timeline-item-details-marker"></div>
					<div class="timeline-item-details-description dut">
						<h4>DUT Informatique</h4>
						<p>Université Paris 13 - Villetaneuse</p>
						<p>En cours</p>
					</div>
				</a>
			</section>

			<section class="timeline-item">
				<a class="timeline-item-details"> 
					<time datetime="2017-12-07" class="timeline-item-details-date">2015</time>
					<div class="timeline-item-details-marker"></div>
					<div class="timeline-item-details-description bts">
						<h4>BTS Comptabilité et gestion des organistaions</h4>
						<p>Lycée Charles de Gaulle - Longperrier</p>
						<p>Diplôme obtenu</p>
					</div>
				</a>
			</section>

			<section class="timeline-itemlast">
				<a class="timeline-item-details"> 
					<time datetime="2017-12-07" class="timeline-item-details-date">2012</time>
					<div class="timeline-item-details-marker"></div>
					<div class="timeline-item-details-description bac">
						<h4>Bac Economique et Social</h4>
						<p>Lycée Honoré de Balzac - Mitry Mory</p>
						<p>Diplôme obtenu</p>
					</div>
				</a>
			</section>
		
		</div>
	</div>
	<!-- EXPERIENCES-->

	<div class="experiences" id="experiences">
		<h3>Mes expériences</h3>

		<div class="timeline2">

			<section class="timeline-item2">
				<a class="timeline-item-details2" > 
					<time datetime="2017-12-07" class="timeline-item-details-date2"> </time>
					<div class="timeline-item-details-marker2 stuart"></div>
					<div class="timeline-item-details-description2">
						<h4>Coursier - Juillet 2016 / Septembre 2017</h4>
						<p>• Activité indépendante excercé avec le statut d'auto-entrepreneur </p>
						<p>• Réalisation de livraison en vélo cargo en partenariat avec les entreprises Stuart, Fritchi et UberEat </p>
					</div>
				</a>
			</section>

			<section class="timeline-item2">
				<a class="timeline-item-details2" > 
					<time datetime="2017-12-07" class="timeline-item-details-date2"> </time>
					<div class="timeline-item-details-marker2 toronto"></div>
					<div class="timeline-item-details-description2">
						<h4>Séjour linguistique - Mai / Juin 2017</h4>
						<p>• Cours intensif durant 8 semaines à l'ILSC School de Toronto au Canada afin d'améliorer mon anglais</p>
						<p>• Hébergé chez l'habitant, la proximité avec ma famille d'acceuil m'a permis de découvrir réellement la culture du pays </p>

					</div>
				</a>
			</section>

			<section class="timeline-item2last">
				<a class="timeline-item-details2" > 
					<time datetime="2017-12-07" class="timeline-item-details-date2"> </time>
					<div class="timeline-item-details-marker2 ag2r"></div>
					<div class="timeline-item-details-description2">
						<h4>Gestionnaire adhésion AG2R La Mondiale - Septembre 2015 / Avril 2016</h4>
						<p>• Activité réalisé durant deux CDD de 4 mois</p>
						<p>• Gestion des contrats au sein du service retraite de l'entreprise</p>
					</div>
				</a>
			</section>
		</div>
	</div>

	<!-- ------------------------------------------CONTACT---------------------------------------------------------------------------->


	<div id="contact">
		<div class="bkg-contact">
			<h3 class="titre-contact">Contact</h3>
			<form action="" method="POST" name="formulaire">
				<p> Si vous désirez me contacter, remplisser le formulaire ci-dessous </p>
				<br>
				<img src="./image/user.png">
				<input type="text" name="nom" style="width:170px;" placeholder="Saisir votre nom et prénom"
				value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>"><br>
				<!--<img src="./image/smartphone.png">
				<input type="tel" name="Telephone" placeholder="Saisir votre numero"><br>-->
				<img src="./image/email.png">
				<input type="MAIL" name="mail" style="width:170px;" placeholder="Saisir votre mail" 
				value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>"><br>
				<textarea cols="60" rows="15" value="Envoyer !" name="mailform"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br>
				<button style="color:rgb(255,127,80); padding:5px 10px;" type='submit'>Envoyé</button>
			</form>

			<?php
				if(isset($msg)){
					echo $msg;
				}
			?>

			<div class="reseau">
				
				<a href="mailto:clement.lebas77@live.fr"><img src="./image/email.png">   clement.lebas77@live.fr</a>
				<br>
				<a href="moncv.pdf" title="cv en pdf" ><img src="./image/attachment.png">    Télécharger mon cv</a>
				<p class="social"><img src="./image/group.png">     Social</p>
				<a href="#"><img src="./image/facebook.png" alt="logo facebook"></a>
				<a href="http://www.linkedin.com/in/clement-lebas" target="_blank"><img src="./image/linkedin.png" alt="logo linkedin"></a>
			
			</div>

			<!-- FORMULAIRE PHP --->
	<!-- 
	</*?php
	if(isset($_POST['mailform']))
	{
		if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
		{
			$header="MIME-Version: 1.0\r\n";
			$header.='From:"PrimFX.com"<clement.lebas77@live.fr>'."\n";
			$header.='Content-Type:text/html; charset="uft-8"'."\n";
			$header.='Content-Transfer-Encoding: 8bit';

			$message='
			<html>
				<body>
					<div align="center">
						<img src="http://www.primfx.com/mailing/banniere.png"/>
						<br />
						<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
						<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
						<br />
						'.nl2br($_POST['message']).'
						<br />
						<img src="http://www.primfx.com/mailing/separation.png"/>
					</div>
				</body>
			</html>
			';

			mail("clement.lebas77@live.fr", "CONTACT - portfolio", $message, $header);
			$msg="Votre message a bien été envoyé !";
		}
		else
		{
			$msg="Tous les champs doivent être complétés !";
			
		}
	}
	?>-->
		</div>
	</div>

		<footer>
			<em>Copyright © Clément Le Bas 2018</em>
		</footer>

	</div>





</body>
</html>
