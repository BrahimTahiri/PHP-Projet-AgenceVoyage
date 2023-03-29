<title>SuperVoyage</title>
<link rel="stylesheet" href="pages\pageAdmin\As.css">



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
        if ($type=='admin') { 
     ?>   
    <!--body-->
    <br>
        <br>
            <br>
                <br>
                    <br>
                        <br>
                            <br>
                <link rel="stylesheet" href="pages\panneau_admin\Titre.css">
                <?php include("pages\panneau_admin\Titre.html")?>
        
       
            
                    
        <?php include("pages\pageAdmin\Es.html");?>
            
        
    <!--footer-->
    <?php 
    include("pages\header+footer\Footer.html");
    ?>
<?php }
else{
    
    header('Location: index.php');
}
      
?>