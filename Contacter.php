<?php include "header/header3.php" ?> 
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
        <label>Nom :</label>
        <input type="text" name="nom">
        
		<label>Prénom :</label>
        <input type="text" name="prenom">
		
		<label>adresse e-mail :</label>
        <input type="email" name="mail">
	
		
		<label>Sujet :</label>
        <input type="text" name="sujet">
	
		
		<label>Votre message :</label>
		<br/><br/>
		<textarea type="areatext" name="msg" placeholder="Votre question...." style="height:170px"></textarea>
		<br/><br/>
		
        
		<button name="contact" type="submit">Envoyer</button>

      </form>
    </div>
  </div>
</div>
</body>
</html>
  <?php include "footer.php" ?> 