
<html>
<?php include "header/header_profil.php" ?> 
   <body>
      <div class="">
      <center>
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br /><br />
         <b> Votre Nom : </b> <?php echo $userinfo['nom']; ?>
         <br />
         <b> Votre Prénom : </b> <?php echo $userinfo['prenom']; ?>
         <br />
         <b> Votre Age : </b> <?php echo $userinfo['age']; ?> <i>ans</i>
         <br />
         <b> Votre Pseudo : </b><?php echo $userinfo['pseudo']; ?>
         <br />
         <b> Votre Adresse e-mail : </b><?php echo $userinfo['email']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="connect/c_ediprofil.php">Modifier mon profil</a>
         
         <?php
         }
         ?>
      
      </div>
   </center>
   </body>

   <?php include "footer.php" ?> 

</html>
