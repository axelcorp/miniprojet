
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">


<head>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all">
<link rel="icon" type="image/png" href="image/vin2.png" />
<script type="text/javascript" src="js/fonctions.js"></script>
<title>Contatct</title>
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
	
	<!--carte-->
	<div id="map" ></div>	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqaxIrehFxDVFvBEINEbJX-H7xCCgyLi8&callback=myMap"></script>
	
	<!--formulaire ccoordonnées-->
	<div id="corps2" style="left:0vw;width:70vw;">
		<div style=" margin:0 60% 0 5%;">
		<form name="contact" action="page7.php" method="post" onSubmit="return verif()">
		
			<label for="Nom" >Nom: </label><input type="text"  class="coordonnées" name="Nom"></input><br />
			<label  id="labeltel" for="tel" >Telephone: </label><input type="text"  class="coordonnées" name="tel" onblur="veriftel(document.contact.tel.value)";></input><br />
			<label for="adresse" >Adresse: </label><input type="text" class="coordonnées" name="adresse"  ></input><br />
			<label id="labelmail" for="email">Adresse mail: </label><input type="text" class="coordonnées" name="email" Placeholder="jeanclaude@gmail.com" onblur="verifmail(document.contact.email.value);" ></input><br />
			<label for="message">Message: </label></br><textarea name="message" cols="40" rows="4" ></textarea><br />
			<input type="hidden" id="scriptok" value="1">
			
			<!--formulaire captcha-->
				<fieldset style="margin-top:0%"><legend>captcha</legend>
				<input type="text" class="number" name="captcha1" id="captcha1" value="">+
				<input type="text" class="number" name="captcha2" id="captcha2" > 
				=<input type="text" name="resultat1" value=""></br>
				
				<!--captcha-->
					<script language="javascript">
						function ton_nb_aleatoire() 
						{var a=[5,67,53,6,13,8];
						var b= new Array;
						var c=Math.floor(Math.random()*3);
						b[0] = a[c];
						b[1] = a[c+3];
						return b;};
					var c=ton_nb_aleatoire();
					document.getElementById("captcha1").value=c[0];
					document.getElementById("captcha2").value=c[1];
					</script>
				</fieldset>
			</div>
			
			<input type="submit" style="margin-left:10%" value="Envoyer" />
		</form>
	</div>


<Script language="javascript">
document.getElementById("bouton4").style.color="purple";
</Script>
</body>

</html>
