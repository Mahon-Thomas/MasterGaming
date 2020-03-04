<?php
SESSION_start();

$maconnexion =mysqli_connect("localhost","root","root","dbmastergaming")
or die("Connexion au serveur impossible");
/*$db=mysql_select_db("smi",$maconnexion)
or die("Sélection de la base de données impossible");*/

// ajoute les données saisies dans la page précédente à la base de données
$Rqt="INSERT INTO contacter
values(NULL,'$_POST[nom]','$_POST[prenom]','$_POST[mail]','$_POST[sujet]','$_POST[msg]')";

$Resultat=mysqli_query($maconnexion,$Rqt)
or die("Exécution de la requête impossible");	



$bdd = new PDO('mysql:host=localhost;dbname=dbmastergaming', 'root', 'root');

$requser = $bdd->prepare("SELECT * FROM membre WHERE email = ? AND mdp = ?");
      $userexist = $requser->rowCount();
      header("Location: ../Verif_contacter1.php?id=".$_SESSION['id']);

?>