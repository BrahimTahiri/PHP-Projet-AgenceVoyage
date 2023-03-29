<title>Super Voyage</title>

<!--header-->
<?php 
    include("pages\header+footer\header.php");
    $pseudo=$_SESSION['pseudo'];
    $requete ="SELECT *
        FROM CLIENTS
        WHERE pseudo='$pseudo';";
        
// connexion bdd
$connexion = connecter();

// exécution requête
$resultat = mysqli_query($connexion, $requete); 
$ligne = mysqli_fetch_assoc($resultat);
$type= $ligne['type'];
    if ($type=='admin') { ?>
<br>
    <br>
        <br>
            <br>
<!--body-->
<?php
include("pages/NewDestination/AjoutDestination.php");
?>
<!--footer-->
<?php 
    include("pages\header+footer\Footer.html");
    }
    else{
    
        header('Location: index.php');
    }?>