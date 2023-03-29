 <!--header-->
 
<?php
$pays=$_POST['pays'];
include ('bibliotheque.php');
session_start();

$pseudo=$_SESSION['pseudo'];

$Ncommande=$_POST['Ncommande'];


$requete = "DELETE from commandes where Ncommande=$Ncommande;";
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);
header('Location: commande.php');
?>

