<?php

$bdd = new PDO('mysql:host=localhost;dbname=dbmastergaming', 'root', 'root');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM membre WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();
?>




<!DOCTYPE HTML>
<html>

	<head class="head">
		<meta charset ="utf -8">
		<title>Accueil | Master Gaming</title>
		<link rel ="stylesheet" href="./css/Style.css">
		
		<center>
        
		<img src="./css/image/123.png" alt="logo Master gaming" />
		
		</center>
		
			<nav id="menu">
				<ul>
					
				  <li><a href="./connect/c_index.php">ACCUEIL</a></li><!--
				  --><li><a href="./connect/c_Contacter.php">NOUS CONTACTER</a></li><!--
				  --><li><a href="./connect/c_panier.php">PANIER( <?php print $panier_count; ?>)</a></li><!--
				  --><div class="connect">
				  <li><a>Vous êtes connecté ! <?php echo $userinfo['pseudo']; ?></a></li><!--
				  --><li><a href="./deconnexion.php">Deconnexion</a></li>
				  </div><!--
				  --><li><a href="./connect/c_profil.php">MON PROFIL</a></li>
				  
				</ul>
			</nav>
<?php
}
?>
	</head>