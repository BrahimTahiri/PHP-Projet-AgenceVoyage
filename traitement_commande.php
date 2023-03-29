<link rel="stylesheet" href="pages\Formulaire\Commande.css">
<?php

include("pages\header+footer\header.php");


?>
<br>
	<br>
		<br>



<?php
if (isset($_SESSION["pseudo"])) {
	
	
	?>
	<div class="container">  
    <form id="contact" action="exec_commande.php" method="post">
        
        <h3>Vous confirmez le voyage suivant ?</h3>
      <br>
      <fieldset>
        Pays : <?php echo $_POST['pays']; ?>
      </fieldset>
      <br>
      <fieldset>
        Ville : <?php echo $_POST['ville']; ?>
      </fieldset>
      <br>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Oui</button>
      </fieldset>
      <input type="hidden" name="pays" value="<?php echo $_POST['pays']; ?>">
        <input type="hidden" name="ville" value="<?php echo $_POST['ville']; ?>">
        <input type="hidden" name="date" value="<?php echo date("d-m-Y"); ?>">
    </form>
   
    
  </div>
  <?php
}
else {
	header('Location: inscription.php');
}
?>


<?php
include("pages\header+footer\Footer.html");
?>

