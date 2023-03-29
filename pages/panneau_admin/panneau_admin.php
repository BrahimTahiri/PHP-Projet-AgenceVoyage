<title>SuperVoyage</title><br>
<center>
<a href="first_page_admin.php">
<button type="button" id="b1" class="btn btn-secondary">Retour</button></a>
<br>
<br>
<h3>Supprimer un utilisateur</h3></center>
<br> 
  <br>
    
    <?php   

    $requete = "SELECT * FROM CLIENTS WHERE type = 'user';";
    $connexion = connecter();
    $resultat = mysqli_query($connexion, $requete);    
    
    while ($ligne = mysqli_fetch_assoc($resultat))
    {
        $pseudo =$ligne['pseudo'];
        $numero =$ligne['numero'];
        
    ?>
    <form action="user_del.php" method="post">
    <center>
    <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
    <input hidden type="text" name="numero" value="<?php echo $numero; ?>" ></input>
    <input hidden type="text" name="pseudo" value="<?php echo $pseudo; ?>" ><?php echo $pseudo; ?></input>
  <div class="card-body text-primary">
  <p class="card-text">Pour supprimer <?php echo $pseudo; ?> il vous suffit de cliquer sur supprimer !</p>
    
  
    <button type="submit"  class="btn btn-danger">supprimer</button >
    </div>
    
    </article></center>
    </form>
    <?php
    }
    ?>