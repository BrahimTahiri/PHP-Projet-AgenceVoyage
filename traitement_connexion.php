<?php
session_start();

include('bibliotheque.php');

$mdp = $_POST['mdp'];
$mail = $_POST['mail'];
    
    
    // requete qui va vérifier que le mail existe
    $requete ="SELECT *
            FROM CLIENTS
            WHERE mail='$mail';";
            
    // connexion bdd
    $connexion = connecter();
    
    // exécution requête
    $resultat = mysqli_query($connexion, $requete); 
        
    // si aucun résultat alors redirection automatique vers connexion
    if (mysqli_num_rows($resultat) == 0)
        {header("Location: connexion2.php" );}
        
    
    /* sinon résultat donc ouverture de session pour le mail 
    et redirection automatique vers accueil*/
    else
        {   
         /*sinon le mail existe et il faut alors stocker le mdp 
         crypté obtenu à partir de la requête dans $mdph et tester la validité
          du mot de passe fourni par le client dans le formulaire de connexion qui 
          a été récupéré grâce à la méthode POST et stocké dans $mdp (au début de la page)*/


        $ligne = mysqli_fetch_assoc($resultat);
        $mdph = $ligne['mdp'] ;
        $type= $ligne['type'];
        $pseudo=$ligne['pseudo'];

        // si la vérification du mdp est ok alors ouverture de session et redirection vers l'accueil

            if (password_verify($mdp,$mdph))
            {

                if ($type=='admin') {
                    header('Location: first_page_admin.php'); 
                    $_SESSION['pseudo']=$pseudo;
                }
                else {
                    header('Location: index.php');
                    
                    $_SESSION['pseudo']=$pseudo;
                }                                
            }
           
        //sinon message et lien vers la page de connexion
            else
            {
                header('Location: connexion3.php');
            }
        }
?>