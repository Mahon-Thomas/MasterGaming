<?php
SESSION_start();

// eventuellement vider le panier
if (isset($_GET["vider"]))
{
      session_destroy();
}
SESSION_start();
$bdd = new PDO('mysql:host=localhost;dbname=dbmastergaming', 'root', 'root');

$requser = $bdd->prepare("SELECT * FROM membre WHERE email = ? AND mdp = ?");
      $userexist = $requser->rowCount();
      header("Location: ../panier.php?id=".$_SESSION['id']);

?>