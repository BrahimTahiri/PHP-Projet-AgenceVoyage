<title>SuperVoyage</title>
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
        if ($type=='admin') { 
     ?>   
    <br>
        <br>
            <br> 
                
    <?php 
    
    include("pages\panneau_admin\panneau_admin.php")
     ?>
    <!--footer-->
    <?php 
    include("pages\header+footer\Footer.html");
    ?>
    <?php }
    else{
    
        header('Location: index.php');
    }
    ?>