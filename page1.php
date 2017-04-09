
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<!-- en-tete du document -->
<head>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all">
<script type="text/javascript" src="js/fonctions.js"></script>
<link rel="icon" type="image/png" href="image/vin2.png" />
<title>Presentation de Chateau Axel</title>
<h1>Château Axel: Vins <strong>naturels bios</strong> du val de <strong>loire</strong><br /></h1>
</head>



<body onmouseover='taille()'; >


<!--zone de survol lancement fonction taille-->	
<div id="corps" style="width:90%;height:95%; position: absolute; top:5%;left:5%;" onmouseover='taille()'></div>
	<div style="color:white; position:absolute; top:0%; left:0%;z-index:+1;" ><input id="largeur" style="color:white;background-color:transparent;width:3vw;border:none; background-color:transparent;"  ></input>   <input id="hauteur" style="color:white;background-color:transparent;width:3vw;border:none; background-color:transparent;" ></input></div>
		
	<!--bannière et logo-->	
	<img src="image/banniere2.png" id="banniere"></img><br />
	<img src="image/bio.jpg" id="logo"></img><br/>
			
	<!--texte deco-->	
	<div id="texte">“Une barrique de vin peut réaliser plus de miracles qu'une église pleine de saints.”</div>
		
	<!--pied de page-->
	<a id= "pieds"  href="legales.php">Mentions légales</a>
	<div id= "pieds2" > © Axel Guiroy 2017</div>
	
	<!-- menu-->
	<div id="cadre">
	
		
	<div id="boutons">
		<ul>
			<li><a class= "boutonO" id="bouton0" href="page1.php" >Accueil </a></li>	
			<li><a class= "bouton1" id="bouton1" href="page2.php">Vouvray</a></li>				
			<li><a class= "bouton2" id="bouton2" href="#"> Touraine Chenonceau </a>
				<ul id="bouton2menu">
					<li><a href="page3.php" id="bouton2bis">Cuvée Jean Michel</a></li>
					<li><a href="page4.php" id="bouton2ter">Cuvée Jean Claue</a></li>
				</ul>
			<li><a class= "bouton3" id="bouton3" href="page5.php"> Touraine Amboise </a></li>
			<li><a class= "bouton4" id="bouton4" href="page6.php"> Contact </a>
			</li>
		</ul> 
	</div>
	
	<!-- image -->	
	<img id="imageaccueil" src="image/rouge.jpg"  > 	
	
	<!-- corps texte -->	
	<div id="corps2" ;> 
	
	
			

	
		<h2 href="#" id="titre1" class="page1" OnClick="cache()" ><strong>Un terroir d'exception </strong> [...]</h2></br>
			<article id="resum"> Le val de loire offre  de vins très variés tels que le <strong>Bourgueil, le Chinon ou le Vouvray</strong>  </article></br>
			<article id="presentation" >Les vignobles de la <strong>vallée de la Loire</strong> ne possèdent ni hiérarchie des 
			<strong>terroirs</strong> (comme en Bourgogne ou en Alsace), ni classement historique (comme à Bordeaux) ;  
			il n’est donc pas aisé d’identifier les meilleurs producteurs. Pourtant, cette région est une <strong>mine d’or</strong> pour 
			l’amateur de vin en vertu de ses trois atouts : diversité, qualité et prix doux. </br>
			En effet, la Loire peut tout produire, de la <strong>liqueur concentrée au vin sec, du primeur au vin centenaire,</strong> 
			de la saveur fruitée, proche du raisin, au minéral issu du terroir. La production de vin est aujourd’hui globalement 
			<strong>qualitative</strong>, sous l’impact d’une nouvelle génération de <strong>vignerons artistes</strong> qui reviennent à une viticulture plus 
			attentive et moins productive, tout en respectant le raisin dans les vinifications.
			</article></br>
			
		<h2 href="#" id="titre2" class="page1" OnClick="cache2()" ><strong>Des vins naturels </strong> [...]</h2></br>
			<article id="resum2">Nos vignes sont cultivées selon les principes de <strong>l'agriculture biodynamique</strong> et sans ajout de <strong>sulfites</strong>  </article></br>
			<article id="presentation2" >La viticulture <strong>biodynamique</strong> vise, 
			de façon générale, à réhabiliter, dynamiser et intensifier la vie organique dans 
			le milieu où vit la vigne. Cette démarche consiste à intensifier les échanges entre 
			la plante et son environnement (terre et air), de façon à 
			obtenir de meilleurs raisins et donc de meilleurs vins. La <strong>biodynamie</strong> cherche à renforcer 
			la vitalité et la résistance des plantes, en améliorant 
			les échanges <strong>naturels</strong> entre le sol et les racines, et entre le ciel et 
			les feuilles… afin d’optimiser l’expression du <strong>terroir</strong> dans les raisins et 
			donc dans le vin.
			</article></br></br></br>
	</div>
	</div>
	
	
		
	<!-- coloration rubrique selectionnee -->		
	<Script language="javascript"> 
	document.getElementById("bouton0").style.color="purple";
	</Script>

	<!-- impression -->	
	<a href="#" id="impression" OnClick="impression()" style="font-family:none ;color:red;font-size:2vh;position:fixed; left:22vw; bottom:11vh;">Imprimer</a>		
</div>
	
	
</body>
</html>
