<?php
	// activation du mécanisme des sessions
	session_start();

include('bibliotheque.php');
if (isset($_POST['pdc'])&&isset($_POST['mdp'])&&isset($_POST['mail'])&&isset($_POST['pseudo'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['tel'])&&isset($_POST['adress'])) 
{
	
    $mdp = $_POST['mdp'];
    $mail = $_POST['mail'];
	$pseudo = $_POST['pseudo'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$tel = $_POST['tel'];
	$adress = $_POST['adress'];
	
/*On fait une requête pour s’assurer que le pseudo n’existe pas dans la bdd
Requête qui cherche le pseudo dans la bdd*/

	$requete ="SELECT pseudo
				FROM CLIENTS
				WHERE pseudo='$pseudo';";
			
// connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);


	if (mysqli_num_rows($resultat) == 0)
	{ 
		// si le resultat est egal a 0 alors ce pseudo n’existe pas
		//Hacher le mot de passe récupéré et le stocker dans une variable $mdph

		$mdph = password_hash($mdp, PASSWORD_DEFAULT);
			
		// requête d'ajout dans la base de données
		$requete = "INSERT INTO clients (mdp,mail,pseudo,nom,prenom,tel,adress)
					VALUES ('$mdph','$mail','$pseudo','$nom','$prenom','$tel','$adress');";
					
		// connexion à la base de données
		$connexion = connecter();
			
		//Exécution de la requête
		$resultat = mysqli_query($connexion, $requete);
			
		//Fermeture de la bdd
		mysqli_close($connexion);
		
		// Ouverture d’une session pour ce pseudo
		
		$_SESSION['pseudo']=$pseudo;

		// et redirection vers l'accueil			 
		header('Location: index.php');
		

 	}
  // sinon le pseudo existe déjà, affichage d’un message et lien de retour au formulaire
  else
	{
     	header('Location: inscription3.php');
	}
}
else 
{
	header('Location: inscription2.php');
}
?>