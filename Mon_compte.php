<title>SuperVoyage</title>
<?php
include("pages\header+footer\header.php");
if  (isset($_SESSION['pseudo'])) 
      {
?>
<br>
    <br>
        <br>
            <br>
                <br>
                   <center><h1>Mon compte</h1></center> 
                        <br>
                            <br>
                                <br>
                                    <br>
                                        <br>
<div class="d-grid gap-2">
  <a class="btn btn-warning" href="modifier.php" role="button">modifier mes informations</a>
  <a class="btn btn-info" href="commande.php" role="button">Mes commandes</a>
</div>
<?php
include("pages\header+footer\Footer.html");
      }
else {
    header('Location: index.php');
}
?>
