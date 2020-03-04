<?php include "header/header_profil.php" ?>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=dbmastergaming', 'root', 'root');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membre WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();

   if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nom']) {
    $newnom = htmlspecialchars($_POST['newnom']);
    $insertnom = $bdd->prepare("UPDATE membre SET nom = ? WHERE id = ?");
    $insertnom->execute(array($newnom, $_SESSION['id']));
    header('Location: profil.php?id='.$_SESSION['id']);
 }
   if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $user['prenom']) {
    $newprenom = htmlspecialchars($_POST['newprenom']);
    $insertprenom = $bdd->prepare("UPDATE membre SET prenom = ? WHERE id = ?");
    $insertprenom->execute(array($newprenom, $_SESSION['id']));
    header('Location: profil.php?id='.$_SESSION['id']);
 }
    if(isset($_POST['newage']) AND !empty($_POST['newage']) AND $_POST['newage'] != $user['age']) {
    $newage = htmlspecialchars($_POST['newage']);
    $insertage = $bdd->prepare("UPDATE membre SET age = ? WHERE id = ?");
    $insertage->execute(array($newage, $_SESSION['id']));
    header('Location: profil.php?id='.$_SESSION['id']);
 }   
    if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE membre SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['email']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE membre SET email = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE membre SET mdp = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
?>



   <body>
      <div class="inscription">
         
         
            <form method="POST" action="" enctype="multipart/form-data">
            <center>
                <h2>Edition de mon profil</h2>
            </center>
               
                <label>Nom :</label>
               <input type="text" name="newnom" placeholder="Nom" value="<?php echo $user['nom']; ?>" /><br /><br />
               
               <label>Prenom :</label>
               <input type="text" name="newprenom" placeholder="Prenom" value="<?php echo $user['prenom']; ?>" /><br /><br />

               <label>Âge :</label>
               <input type="numeric" name="newage" placeholder="Age" value="<?php echo $user['age']; ?>" /><br /><br />
               
               <label>Pseudo :</label>
               <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" /><br /><br />
               
               <label>Mail :</label>
               <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['email']; ?>" /><br /><br />
               
               <label>Mot de passe :</label>
               <input type="password" name="newmdp1" placeholder="Mot de passe"/><br /><br />
               
               <label>Confirmation - mot de passe :</label>
               <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />
               
               <input type="submit" value="Mettre à jour mon profil !" />
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         
      </div>
   </body>
</html>
<?php   
}
else {
   header("Location: connexion.php");
}
?>

<?php include "footer.php" ?>