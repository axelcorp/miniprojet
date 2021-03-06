
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all">
<script type="text/javascript" src="js/fonctions.js"></script>
<link rel="icon" type="image/png" href="image/vin2.png" />
<title>Notre Touraine Chenonceau classique</title>
<h1>Château Axel: <strong>Touraine Chenonceau</strong> <br /></h1>
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

	<img id="imageaccueil" src="image/bouteille2.jpg" > 	

	<div id="corps2";>	
		<h2>Un  <strong>Vin rouge fruité et leger</strong> </br></br></h2>	
		<article > L’AOC touraine-chenonceaux est une nouvelle appellation qui couvre 27 communes situées de part et d’autres du Cher, 
		et produit des vins blancs et rouges sur un sol composé de calcaires, d’argiles à Silex ou de pierres siliceuses. 
		Le cépage côt dans les vins rouge <strong> Touraine Chenonceau </strong> est dominant puisqu'il rentre à 50% minimum 
		dans l'assemblage (associé également à 35% minimum de cabernet franc).</br></br>
		La cuvee Jean Michel est veillie en <strong>fut</strong> pendant au moins trois ans. Une fois cette periode de maturité atteinte, ce vin doit etre bu dans les 5 ans.
		</br></article>
	</div>
</div>

<div   id="refresh" >	
	<Script language="javascript" >
	document.write("Date de dernière modification : " + document.lastModified) ;
	</Script>
</div>

<Script language="javascript">
document.getElementById("bouton2bis").style.color="purple";
document.getElementById("bouton2menu").style.display="inline-block";
document.getElementById("bouton2menu").style.width="120px";
document.getElementById("bouton2").style.color="purple";
</Script>
</body>
</html>
