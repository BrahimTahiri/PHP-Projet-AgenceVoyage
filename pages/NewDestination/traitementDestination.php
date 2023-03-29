<title>SuperVoyage</title>

<?php 
include('bibliotheque.php');
if (isset($_POST['nomPays'])&&isset($_POST['nomVille'])&&isset($_POST['description'])) {
    
    
    
    $nomPays = $_POST['nomPays'];
    $imagesPays = $_POST['nomPays'].".png";
    $nomVille = $_POST['nomVille'];
    $imagesVille = $_POST['nomVille'].".png";
    $description = $_POST['description'];
    

    $requete ="SELECT nomPays
				FROM pays
				WHERE nomPays='$nomPays';";
			
    // connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);
    
    if (mysqli_num_rows($resultat) == 0) {

    #Ajout du pays
    $requete = "INSERT INTO pays (nomPays,imagesPays)
					VALUES ('$nomPays','$imagesPays')
                    ;";
    
   
    // connexion à la base de données
		$connexion = connecter();
			
		//Exécution de la requête
		$resultat = mysqli_query($connexion, $requete);
			
		//Fermeture de la bdd
		mysqli_close($connexion);
    }
?>
<?php
        $requete ="SELECT nomVille
        FROM ville
        WHERE nomVille='$nomVille';";

        // connexion à la base de données
        $connexion = connecter();

        //Exécution de la requête
        $resultat = mysqli_query($connexion, $requete);

        //Fermeture de la bdd
        mysqli_close($connexion);

        if (mysqli_num_rows($resultat) == 0) {
            
        

        $requete = "SELECT idPays
                    FROM pays
                    where nomPays='$nomPays'
                    ;";
        // connexion à la base de données
        $connexion = connecter();
                    
        //Exécution de la requête
        $resultat = mysqli_query($connexion, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        $idPays= $ligne['idPays'];    
        //Fermeture de la bdd
        mysqli_close($connexion);

        
    $requete = " INSERT INTO ville (nomVille,idPays,imagesVille)
                    VALUES ('$nomVille','$idPays','$imagesVille') ;";
	// connexion à la base de données
    $connexion = connecter();
                    
    //Exécution de la requête
    $resultat = mysqli_query($connexion, $requete);
    //Fermeture de la bdd
    mysqli_close($connexion);
        }
?>

<?php
        if (mysqli_num_rows($resultat) == 0) {
            
        
        $requete = "SELECT idVille
                    FROM ville
                    where nomVille='$nomVille';";
        // connexion à la base de données
        $connexion = connecter();

        //Exécution de la requête
        $resultat = mysqli_query($connexion, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        $idVille= $ligne['idVille'];    
        //Fermeture de la bdd
        mysqli_close($connexion);


    $requete = " INSERT INTO voyages (description,idVille)
                    VALUES ('$description','$idVille') ;";
    // connexion à la base de données
    $connexion = connecter();
                    
    //Exécution de la requête
    $resultat = mysqli_query($connexion, $requete);
    //Fermeture de la bdd
    mysqli_close($connexion);
        }

				
        header('Location: http://localhost/agence de voyage/voyage.php');
    
		

 	

}
else {
    echo 'salut';
}

?>