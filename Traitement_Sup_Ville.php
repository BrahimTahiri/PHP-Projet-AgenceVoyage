<?php
include ('bibliotheque.php');

$idVille = $_POST['idVille'];


$requete = "SELECT * FROM voyages WHERE idVille=$idVille;" ;
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
$ligne = mysqli_fetch_assoc($resultat);
$idVoyage= $ligne['idVoyage'];
mysqli_close($connexion);

$requete = "SELECT * FROM ville WHERE idVille=$idVille;" ;
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
$ligne = mysqli_fetch_assoc($resultat);
$nomVille= $ligne['nomVille'];
$idPays = $ligne['idPays'];
mysqli_close($connexion);

$requete = "SELECT * FROM commandes WHERE idVoyage=$idVoyage;" ;
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
$ligne = mysqli_fetch_assoc($resultat);
$Ncommande= $ligne['Ncommande'];
mysqli_close($connexion);

$requete = "DELETE from ville where idVille=$idVille;";
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);

$requete = "DELETE from voyages where idVoyage=$idVoyage;";
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);

$requete = "DELETE from commandes where Ncommande=$Ncommande;";
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);
header('Location: Sup_Ville.php');
?>
