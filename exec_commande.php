<?php

// activation du mécanisme des sessions
session_start();

include('bibliotheque.php');
$pays = $_POST['pays'];
$ville = $_POST['ville'];
$date=$_POST['date'];
$pseudo=$_SESSION['pseudo'];
            $requete ="SELECT *
                FROM CLIENTS
                WHERE pseudo='$pseudo';";
                
        // connexion bdd
        $connexion = connecter();
        
        // exécution requête
        $resultat = mysqli_query($connexion, $requete); 
        $ligne = mysqli_fetch_assoc($resultat);
        $numero= $ligne['numero'];
        mysqli_close($connexion);
/*On fait une requête pour s’assurer que la commande n’existe pas dans la bdd*/



$requete ="SELECT idPays
                FROM pays
                WHERE nomPays='$pays';";
                
        // connexion bdd
        $connexion = connecter();
        
        // exécution requête
        $resultat = mysqli_query($connexion, $requete); 
        $ligne = mysqli_fetch_assoc($resultat);
        $idPays= $ligne['idPays'];
        mysqli_close($connexion);


$requete ="SELECT idVille
        FROM ville
        WHERE nomVille='$ville';";
        
// connexion bdd
$connexion = connecter();

// exécution requête
$resultat = mysqli_query($connexion, $requete); 
$ligne = mysqli_fetch_assoc($resultat);
$idVille= $ligne['idVille'];
mysqli_close($connexion);



$requete ="SELECT idVoyage
        FROM voyages
        WHERE idVille='$idVille';";
        
// connexion bdd
$connexion = connecter();

// exécution requête
$resultat = mysqli_query($connexion, $requete); 
$ligne = mysqli_fetch_assoc($resultat);
$idVoyage= $ligne['idVoyage'];
mysqli_close($connexion);



$requete ="SELECT *
           FROM COMMANDES
           JOIN voyages on commandes.idVoyage = voyages.idVoyage
           JOIN ville on voyages.idVille = ville.idVille
           WHERE numero = $numero AND nomVille = '$ville' AND idPays = $idPays;";
        
// connexion à la base de données
$connexion = connecter();
    
//Exécution de la requête
$resultat = mysqli_query($connexion, $requete);
    
//Fermeture de la bdd
mysqli_close($connexion);


if (mysqli_num_rows($resultat) == 0)
{ 
// si le resultat est egal a 0 alors cette commande n’existe pas



// requête d'ajout dans la base de données
$requete = "INSERT INTO commandes (numero,date,idVoyage)
            VALUES ('$numero','$date','$idVoyage');";
            
// connexion à la base de données
$connexion = connecter();
    
//Exécution de la requête
$resultat = mysqli_query($connexion, $requete);
    
//Fermeture de la bdd
mysqli_close($connexion);

// et redirection vers l'accueil			 
header('Location: commande.php');


}
// sinon le pseudo existe déjà, affichage d’un message et lien de retour au formulaire
else
{

header('Location: erreur.php');

}

?>
