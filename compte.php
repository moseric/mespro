<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<meta name="viewport" content="width=device-width">
	<title>Accueil|nos offres</title>
	<link rel="stylesheet" type="text/css" href="compte.css">

</head>
<body>
	<h1>MOSERIC</h1>
	<div id=ouvert style="display: none;position: absolute;z-index: 3; background-color: white;">
			<div>
			<div  ><a href="formulaire_education.php">education </a>
			</div>
				<div >
					<a href="commerce.php">commerce</a>
				 </div> 
				<div >
					<a href="#">informatique</a> 
				</div>
				<div >
					<a href="mailto:moseric01@gmail.com">Nous contacter</a>
				</div>
				<div>
					<a href="connexion.php">se connecter</a>
			</div>
		</div>
		<div>
			<img src="xmark-solid.svg" style="width: 25px;height: 25px;">
		</div>
	</div>
	<header>
		
		<div id=moseric>
			<div id="menu">
				<img src="align-justify-solid.svg" style="width: 25px;height: 25px;">
			</div>
			<div id=tous><a href="formulaire_education.php"> éducation</a></div>
			<div id=tous><a href="commerce.php">commerce</a> </div> 
			<div id=tous>informatique</div>
			<div id=tous><a href="mailto:moseric01@gmail.com">Nous contacter</a></div>
			<div id=tous><a href="connexion.php">se connecter</a></div>
		</div>
	</header>
	<section>
			<h3 >Bienvenue sur la plateforme de moseric.</h3>
			<a href="produit.php" id="tous">POSTER UNE ANNONCE </a><br/>
			<img src="monsite.png"><br/>
			<p>Nous intervenons dans l'éducation de vos enfants en leurs offrant des enseignants de compétants dans toutes les matières.Pour inscrit un enfant, allez dans le champs de l'education.
		</p>
		<p>
			Nous vous proposons également un marcher dans lequel vous pouvez acheter et vendre vos produit sur toute étendue du territoir national.Pour avoir avoir accès à cette offre, allez dans le champs de commerce
		</p>
		<p>
			Si vous êtes une entreprise, et vous rechercher un webmaster pour vous créer un site dynamique afin de vous donner la visibilité de vos produit dans le monde entier. Aller dans le champs de informatique
		</p>

	</section>
	<footer>
		<p>page facebook</p>
		<p>email: moseric@gmail.com</p>
		<a href="conditin_generale.php" >condition générale d'utilisation du site</a>
	</footer>
	<script type="text/javascript">
		var menu=document.getElementById('menu');
		var ouvert=document.getElementById('ouvert');
		menu.onclick=function(){
			menu.style.display='none';
			ouvert.style.display='flex';
		};
		ouvert.onclick=function(){
			menu.style.display='block';
			ouvert.style.display='none';
		};
	
	</script>
</body>
</html>