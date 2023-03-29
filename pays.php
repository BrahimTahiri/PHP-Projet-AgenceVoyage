<title>SuperVoyage</title>
    <!--header-->
    <?php 
    include("pages\header+footer\header.php");
    ?>
        <br>
            <br>
                <br>
                    <br>
                    <link rel="stylesheet" href="pages/pays/pays.css">

<section class="container-fluid"></section>
    <div class="row row-cols-3">
      <?php
      $pays=$_POST['pays'];
      $requete1 = "SELECT idPays FROM pays WHERE nomPays='$pays';";
      $connexion = connecter();
      $resultat1 = mysqli_query($connexion, $requete1);
      $ligne = mysqli_fetch_assoc($resultat1);
      $idPays=$ligne['idPays'];



      $requete = "SELECT * FROM ville WHERE idPays=$idPays ;";
      $connexion = connecter();
      $resultat = mysqli_query($connexion, $requete);
      while ($ligne = mysqli_fetch_assoc($resultat))
      {?>
        <div class="col">
              <main class="grid">
                <article >
                  <form action="traitement_commande.php" method="post">
                    <img src="images\<?php echo $ligne['imagesVille']; ?>" alt="Sample photo">
                    <i class="fa fa-html5"></i>
                    <div class="text">
                      <h3><?php echo $ligne['nomVille'] ?></h3>
                        <?php 
                        $idVille=$ligne['idVille'];
                        $nomVille = $ligne['nomVille'];
                        $requete2 = "SELECT description FROM voyages WHERE idVille=$idVille ;";
                        $connexion = connecter();
                        $resultat2 = mysqli_query($connexion, $requete2);
                        $ligne = mysqli_fetch_assoc($resultat2);
                        ?>
                      <p><?php echo $ligne['description'] ?></p>
                      <button href="" class="btn btn-primary" type="submit" data-bs-toggle="button">GO</a>
                        <input type="hidden" name="ville" value="<?php echo $nomVille?>">
                        <?php echo $nomVille?>
                        <input type="hidden" name="pays" value="<?php echo $pays?>">
                    </div>
                  </form>
                </article>
              </main>
        </div><?php
      }?>
    </div> 
</section>
<br>
  <br>
    <br>  
      <br>
        <br>
          <br>  
            <br>              
<!--footer-->
<?php 
include("pages\header+footer\Footer.html");
?>