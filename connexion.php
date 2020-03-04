<?php
SESSION_start();

$bdd = new PDO('mysql:host=localhost;dbname=dbmastergaming', 'root', 'root');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membre WHERE email = ? AND mdp = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['nom'] = $userinfo['nom'];
         $_SESSION['prenom'] = $userinfo['prenom'];
         $_SESSION['age'] = $userinfo['age'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['email'] = $userinfo['email'];
         header("Location: index1.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<html>
<?php include "header/header.php" ?> 
   <body>
      <div class="inscription">
         <form method="POST" action="">
      
      <center>
            <h2>Connexion</h2>
            <br /><br />

            <label for="mail">Adresse e-mail : </label>
            <input type="email" id="mail" name="mailconnect" placeholder="Adresse mail" />
            <br /> <br />
            <label for="mdp">Mot de passe : </label>
            <input type="password" id="mdp" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>

         <br /> <br />
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      
      
      
      </center>
      </div>
   </body>

   <?php include "footer.php" ?> 
</html>