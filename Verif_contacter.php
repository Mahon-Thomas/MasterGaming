
<?php 
	

$maconnexion =mysqli_connect("localhost","root","root","dbmastergaming")
	or die("Connexion au serveur impossible");
/*$db=mysql_select_db("smi",$maconnexion)
	or die("Sélection de la base de données impossible");*/

// ajoute les données saisies dans la page précédente à la base de données
$Rqt="INSERT INTO contacter
    values(NULL,'$_POST[nom]','$_POST[prenom]','$_POST[mail]','$_POST[sujet]','$_POST[msg]')";

$Resultat=mysqli_query($maconnexion,$Rqt)
	or die("Exécution de la requête impossible");	

?>

<?php include "header3.php" ?> 
	<body>
	
	<div class="container">
  <div style="text-align:center">
    <h2>Nous Contacter</h2>
    <p>Nous sommes là pour répondre à vos questions :</p>
  </div>
  <div class="row">

    <div class="column">
	  <img src="css/image/contact.jpg" style="width:80%" >
    </div>
	
    <div class="column">
      <form action="Verif_contacter.php" method="POST">
        
		<br /> <br />
		<?php
		Echo"Votre message a été envoyer avec succès.";	

		//saisie une nouvelle inscription
				echo"<a href='index.php'><b></b></a><br><br>";

				echo"<a href='index.php'><b>Retour à l'accueil</b></a>";
		?>



      </form>

    </div>

  </div>

</div>
</body>

  <?php include "footer.php" ?> 