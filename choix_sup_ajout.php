<title>SuperVoyage</title>
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
                <br>
                    <br>
                        <br>
<!--body-->
<center>
<a href="first_page_admin.php">
<button type="button" id="b1" class="btn btn-secondary">Retour</button></a>
<br>
  <br>    
      <h3>Ajouter</h3>
    <h3>Ou</h3>
    <h3>Supprimer</h3><br><br><br>
<div class="container">
  <div class="row">
    <div class="col">
        <a href="Ajouter_Pays.php">
      <button type="button" id="b1" class="btn btn-success">Ajouter un Pays et une Ville</button></a>
    </div>
    <div class="col">
        <a href="Sup_Pays.php">
      <button type="button" id="b2" class="btn btn-danger">Supprimer un Pays</button></a>
      <a href="Sup_Ville.php">
      <button type="button" id="b2" class="btn btn-danger">Supprimer une Ville</button></a>
    </div>
  </div>
</div></center>

<!--footer-->
<?php 
    include("pages\header+footer\Footer.html");
  }
  else{
  
      header('Location: index.php');
  }
?>