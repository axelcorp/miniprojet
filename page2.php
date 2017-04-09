
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
<script type="text/javascript" src="js/fonctions.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all">
<link rel="icon" type="image/png" href="image/vin2.png" />
<title>Notre Vouvray</title>
<h1>Château Axel: Vin <strong> bioogique de Vouvray</strong> <br /></h1>
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

	<img id="imageaccueil" src="image/bouteille4.jpg"  > 

	<div id="corps2">	
		<h2>Un <strong>vin blanc</strong> légendaire celebré par <strong>Rabelais</strong> </br></br></h2>
		Les vins de Vouvray sont produits à partir du <strong>Chenin blanc</strong>. Ce cépage, originaire d'Europe Centrale fit 
		son apparition dans le Val de Loire vers le IVème siècle et la légende en attribue la paternité à Saint Martin de Tours.</br></br>

		En Touraine, il prend son nom de <strong>« Pineau de la Loire »</strong> comme l'écrit Rabelais au XVIème siècle dans Gargantua « c'est vin pineau, 
		O le gentil vin blanc et, par mon âme ! Ce n'est que vin de taffetas »</br></br>

		Les vins blancs de <strong>Vouvray</strong>, produits par le gros et le menu pineau de la Loire, donnent des vins dorés 
		au léger goût de pierre à fusil, <strong>« pétillants comme le Champagne ou liquoreux comme le vin d'Espagne le plus riche »</strong>.  
		le Chenin blanc s'est affirmé au fil des siècles et couvre aujourd'hui tous les coteaux. 
		Il donne avec les vins de Vouvray sans doute l'une de ses plus belles expressions du monde grâce à un terroir incomparable.</br>	
	</div>
</div>

<Script language="javascript">
document.getElementById("bouton1").style.color="purple";
</Script>
</body>
</html>
