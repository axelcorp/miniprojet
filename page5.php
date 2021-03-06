
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
<link rel="icon" type="image/png" href="image/vin2.png" />
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all">
<script type="text/javascript" src="js/fonctions.js"></script>
<title>Notre Touraine Amboise</title>
<h1>Château Axel: <strong>Touraine Amboise</strong> <br /></h1>
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

	<img id="imageaccueil" src="image/bouteille1.jpg" > 
	 
	<div id="corps2";>
		<h2>Un vin <strong>original </strong>, fiere representant de <strong>l'AOC Touraine Amboise </strong></br></br></h2>	
		<article  >L’AOC Touraine-Amboise s’étend sur 300 hectares de vignes répartis sur 9 communes situées de part et d’autre de la Loire.
		Le sol, composé <strong>d’argiles, de sables et de roches</strong> repose sur des fondations calcaires. A noter que le <strong>silex</strong> 
		est une composante essentielle du sous-sol qui garanti le réchauffement du sol, indispensable à l’épanouissement des cépages. l'utilisation du 
		côt sur ce type de sol offre des aromes confiturés très originaux.</br></br>
		La cuvee Jean Michel est composé de 70% de <strong>cabernet franc</strong> et de 30% <strong>côt</strong>. 
		Ce vin savoureux et gourmand a été primé par la revue des vins de France en 2014.</br></br>
		</br></article></div>
	</div>
</div>

<Script language="javascript">
document.getElementById("bouton3").style.color="purple";
</Script>
</body>
</html>