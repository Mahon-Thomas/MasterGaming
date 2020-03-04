

<?php
// Start the session
session_start();
// eventuellement vider le panier
if (isset($_GET["vider"]))
{
  session_unset();
}

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
?>
<?php include "header/header1.php" ?>


<body>
 <center>
<h3>Mon panier</h3>
 </center>


<hr >
 
 <div class="article">
    <?php
    //afficher le contenu de la session
    if (isset($_SESSION["list"]))
    {
      foreach ($_SESSION["list"] as $value){
        print $value . "<br>";
      }
    }
    ?>
  </div>
 
<hr>
 <div class="panier">
 
  <a href="connect/c_index.php">Continue shopping</a>

  <a href="connect/c_panier1.php?vider=1">Vider le panier</a>

 </div>

</body>

<?php include "footer.php" ?>