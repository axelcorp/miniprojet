<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<meta http-equiv="refresh" content="40;page1.php" />

<head>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all">

<link rel="icon" type="image/png" href="image/vin2.png" />
<meta
<!-- en-tete du document -->
<title>Vin de Touraine: Touraine Amboise</title>
<h1>Château Axel: Contactez nous<br /></h1>
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
	<div id="corps2" style="left:3vw">
	<?php if ($_POST['captcha1']+$_POST['captcha2']==$_POST['resultat1'])
	{print "Message bien recu le ";echo date("d/m/o H:i:s");echo '<br/>';}else{echo "erreur captcha";}?>
	</div>



</body>
</html>
