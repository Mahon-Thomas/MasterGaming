<?php
SESSION_start();

$bdd = new PDO('mysql:host=localhost;dbname=dbmastergaming', 'root', 'root');

$requser = $bdd->prepare("SELECT * FROM membre WHERE email = ? AND mdp = ?");
      $userexist = $requser->rowCount();
      header("Location: ../index1.php?id=".$_SESSION['id']);

?>