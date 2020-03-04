<?php include "header/header2.php" ?> 



	<body>
	<link rel ="stylesheet" href="css/Style3.css">
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
		Echo"Votre message a été envoyer avec succès. <br />";	

		echo"<a href='connect/c_index.php'><b>Retour à l'accueil</b></a>";
		?>



      </form>

    </div>

  </div>

</div>
</body>

  <?php include "footer.php" ?> 