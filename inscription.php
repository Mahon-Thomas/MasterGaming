<?php
$bdd = new PDO('mysql:host=localhost;dbname=dbmastergaming', 'root', 'root');

if(isset($_POST['forminscription'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $age = htmlspecialchars($_POST['age']);
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $email = htmlspecialchars($_POST['email']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['age']) AND !empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 25) {
         if($email == $mail2) {
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $reqmail = $bdd->prepare("SELECT * FROM membre WHERE email = ?");
                  $reqmail->execute(array($email));
                  $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO membre(nom, prenom, age, pseudo, email, mdp) VALUES(?, ?, ?, ?, ?, ?)");
                     $insertmbr->execute(array($nom, $prenom, $age, $pseudo, $email, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 25 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>


<html>
<?php include "header/header.php" ?> 

      <div class="inscription">
         
         <form method="POST" action="">
         
         <center>
         <h2>Inscription</h2>
         <br /><br />         
                     <label for="nom">Nom :</label>
                     <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                     <br /><br />
                     <label for="prenom">Prenom :</label>
                     <input type="text" placeholder="Votre prénom" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
                     <br /><br />
                     <label for="age">Age :</label>
                     <input type="text" placeholder="Votre age" id="age" name="age" value="<?php if(isset($age)) { echo $age; } ?>" />
                     <br /><br />
                     <label for="pseudo">Pseudo :</label>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                     <br /><br />
                     <label for="email">Adresse e-Mail :</label>
                     <input type="email" placeholder="Votre mail" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>" />
                     <br /><br />
                     <label for="mail2">Confirmation du mail :</label>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                     <br /><br />
                     <label for="mdp">Mot de passe :</label>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                     <br /><br />
                     <label for="mdp2">Confirmation du mot de passe :</label>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                     <br /><br />
                  
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                     <br /><br /><br />

       
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>   
         </center>
         </form>
         
      </div>
   </body>

   <?php include "footer.php" ?> 

</html>
