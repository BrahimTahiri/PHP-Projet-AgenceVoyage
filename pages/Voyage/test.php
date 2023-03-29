<section class="container-fluid about">
    <div class="row">
    <link rel="stylesheet" href="produits.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SuperVoyage</title>
<?php
    include ('bibliotheque.php');
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
                        <a href="<?php echo $ligne['nomPays'];?>.php">
                            
                        <img src="images\<?php echo $ligne['imagesPays'];?>" alt="La belle photo" href="page1.html">
                        </a>
                        <div class="text">
                          <br>
                          <a href="<?php echo $ligne['nomPays'];?>.php" class="btn btn-primary btn-block">
                          
                            <?php
                                $idPays=$ligne['idPays'];
                                $requete2 = "SELECT * FROM ville WHERE idPays=$idPays;";
                                $connexion = connecter();
                                $resultat2 = mysqli_query($connexion, $requete2);
                                $ligne = mysqli_fetch_assoc($resultat2);
                                $nomVille=$ligne['nomVille'];
                                mysqli_close($connexion);
                                echo $nomVille;
                            ?>
                          
                          </a>
                        </div>
                
                    </article>
                    
    <?php }
    ?></div>
</section>
</body>
</html>