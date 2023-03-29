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
<br>
    <br>
        <br>
            <br>
<!--body-->
<center>
<a href="choix_sup_ajout.php">
<button type="button" id="b1" class="btn btn-secondary">Retour</button></a>
<br><br>
<section class="container-fluid">
    <div class="row">
        <?php   
        $requete = "SELECT * FROM ville;";
        $connexion = connecter();
        $resultat = mysqli_query($connexion, $requete);    

        while ($ligne = mysqli_fetch_assoc($resultat))
        {
            $idVille =$ligne['idVille'];
            $imagesVille =$ligne['imagesVille'];
            $nomVille =$ligne['nomVille'];
            ?>
                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <br>
                    <form action="Traitement_Sup_Ville.php" method="post">
                        <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <img src="images/<?php echo $imagesVille?>" >
                            <input hidden type="text" name="idVille" value="<?php echo $idVille; ?>" ><?php echo $nomVille; ?></input>
                            <div class="card-body text-primary">
                                <p class="card-text">Pour supprimer <?php echo $nomVille; ?> il vous suffit de cliquer sur supprimer !</p>
                            </div>
                            <button type="submit"  class="btn btn-danger">supprimer</button >
                    </form>
                </article>
                <?php 
        } ?>
    </div>
</section>
<br>
        <br>
            <br>
                <br>
<!--footer-->
<?php 
    include("pages\header+footer\Footer.html");
    }
    else{
    
        header('Location: index.php');
    }
?>