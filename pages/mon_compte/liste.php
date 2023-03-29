
        <?php
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
        $nom= $ligne['nom'];
        $prenom= $ligne['prenom'];
        $tel= $ligne['tel'];
        $adress= $ligne['adress'];
        mysqli_close($connexion); 
        //Fin requete
        
        ?>
        <section class="container-fluid about"><div class="row">
        <?php
        $requete1 ="SELECT *
        FROM COMMANDES
        WHERE numero='$numero';";
        $connexion = connecter();
        $resultat1 = mysqli_query($connexion, $requete1);  
        if (mysqli_fetch_assoc($resultat1)==NULL) {
            ?>
            
            
            <div class="card-body">
                <center>
                <h5 class="card-title">Si vous souhaitez commander des voyages cliquer ici !</h5>
                <br>
                <a href="voyage.php" class="btn btn-primary">GO</a></center>
            </div>
            
            
            <?php

            
        }
        else {
            
            $resultat1 = mysqli_query($connexion, $requete1);
           
        while ($ligne = mysqli_fetch_assoc($resultat1))
        {
        ?>
                        <?php 
                        $Ncommande= $ligne['Ncommande'];
                        $date = $ligne['date'];
                        $idVoyage= $ligne['idVoyage'];
                        
                        //Fin requete
                        $requete ="SELECT idVille
                                FROM voyages
                                WHERE idVoyage='$idVoyage';";
                                
                        // connexion bdd
                        $connexion = connecter();
                        // exécution requête
                        $resultat = mysqli_query($connexion, $requete); 
                        $ligne = mysqli_fetch_assoc($resultat);
                        $idVille= $ligne['idVille'];
                        mysqli_close($connexion); 
                        //Fin requete
                        $requete ="SELECT idPays,nomVille
                                FROM ville
                                WHERE idVille='$idVille';";
                                
                        // connexion bdd
                        $connexion = connecter();
                        // exécution requête
                        $resultat = mysqli_query($connexion, $requete); 
                        $ligne = mysqli_fetch_assoc($resultat);
                        $idPays= $ligne['idPays'];
                        $nomVille= $ligne['nomVille'];
                        mysqli_close($connexion); 
                        //Fin requete
                        $requete ="SELECT nomPays
                                FROM pays
                                WHERE idPays='$idPays';";
                                
                        // connexion bdd
                        $connexion = connecter();
                        // exécution requête
                        $resultat = mysqli_query($connexion, $requete); 
                        $ligne = mysqli_fetch_assoc($resultat);
                        $nomPays= $ligne['nomPays'];
                        mysqli_close($connexion); 
                        //Fin requete
                                ?>
                    
                        <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                        <center><div class="card border-primary mb-3" style="max-width: 18rem;">
                        <input hidden type="text" name="numero"  ></input>
                        <input hidden type="text" name="pseudo"  ><?php echo $nomPays ?></input>
                        <div class="card-body text-primary"><hr>                    
                        <?php
                            echo '<p class="card-text">Pour la ville de <b>'.$nomVille.'</b><br>N*commande : <b>'.$Ncommande. '</b><br>';
                            echo 'Nom : <b>'.$nom.'</b><br>Prenom : <b>'.$prenom.'</b><br>Adress : <b>'.$adress.'</b><br>telephone : <b>'.$tel.'</b><br></p>';
                        ?>
                            <form action="supprimer_commande.php" method="post">
                            <input type="hidden" name="pays" value="<?php echo $nomPays ?>">
                            <input type="hidden" name="Ncommande" value="<?php echo $Ncommande?>">
                            <button type="submit"  class="btn btn-danger">Supprimer ma commande</button >
                            </div></form></center>
                                </article>
        <?php
        }}
        ?></div>
        </section>
        <br>
            <br>
                <br>