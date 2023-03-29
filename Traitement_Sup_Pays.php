<?php
include ('bibliotheque.php');

$idPays = $_POST['idPays'];
//Select
$requete = "SELECT * FROM ville WHERE idPays=$idPays;" ;
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
$ligne = mysqli_fetch_assoc($resultat);
$idVille= $ligne['idVille'];
mysqli_close($connexion);

$requete = "SELECT * FROM voyages WHERE idVille=$idVille;" ;
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
$ligne = mysqli_fetch_assoc($resultat);
$idVoyage= $ligne['idVoyage'];
mysqli_close($connexion);


$requete = "SELECT * FROM commandes WHERE idVoyage=$idVoyage;" ;
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
$ligne = mysqli_fetch_assoc($resultat);
$Ncommande= $ligne['Ncommande'];
mysqli_close($connexion);


//Delete
$requete = "DELETE from ville where idVille=$idVille;";
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);

$requete = "DELETE from pays where idPays=$idPays;";
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
header('Location: Sup_Pays.php');
?>
