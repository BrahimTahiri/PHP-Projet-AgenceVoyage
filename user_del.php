<?php
include ('bibliotheque.php');

$pseudo = $_POST['pseudo'];
$numero=$_POST['numero'];

$requete = "DELETE from clients where numero=$numero;";
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);
header('Location: panneau_admin.php');
?>
