<?php
SESSION_start();
			//stocker les ajouts dans la session
			if (isset($_GET["ajouter"]))
			{
			if (!isset($_SESSION["list"]))
			{
				$_SESSION["list"] = array();
			}
			array_push($_SESSION["list"], $_GET["ajouter"]);
			}
			//compter elements dans panier
			$panier_count = 0;
			if (isset($_SESSION["list"]))
			{
			$panier_count = sizeof($_SESSION["list"]);
			}

$bdd = new PDO('mysql:host=localhost;dbname=dbmastergaming', 'root', 'root');

$requser = $bdd->prepare("SELECT * FROM membre WHERE email = ? AND mdp = ?");
      $userexist = $requser->rowCount();
      header("Location: ../index1.php?id=".$_SESSION['id'] );

?>