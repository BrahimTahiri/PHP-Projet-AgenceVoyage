
<div class="titreproduits">
        <br>
        <h2 id="Produits" class="h2P">Découvrez nos fabuleux voyages !</h2>
    </div>
<section class="container-fluid about">
    <div class="row">
    <link rel="stylesheet" href="pages/produits/produits.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SuperVoyage</title>
    
    
<?php
    
    $requete1 = "SELECT * FROM ville;";
                                $connexion = connecter();
                                $resultat1 = mysqli_query($connexion, $requete1);
                                $ligne = mysqli_fetch_assoc($resultat1);
                                $nomVille=$ligne['nomVille'];
                                mysqli_close($connexion);
    $requete = "SELECT * FROM pays;";
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
while ($ligne = mysqli_fetch_assoc($resultat))
{?>
                    <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                        <br>  
                        <form action="pays.php" method="post">
                        <button type="submit" class="btn btn-light"> 
                            <input type="hidden" name="pays" value="<?php echo $ligne['nomPays'];?>">
                            <img src="images\<?php echo $ligne['imagesPays'];?>" alt="La belle photo" href="page1.html">
                        </button></form>
                    </article>
                    
    <?php }
    ?></div>
</section>
</body>
</html>