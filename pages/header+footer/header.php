<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <header class="header">
  <a href="index.php" class="logo">SuperVoyage</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a href="voyage.php">Voyage</a></li>
    
      <!--le sélecteur class permet d'ajouter du CSS -->
    
    <?php
    session_start();
    include('bibliotheque.php');
    if  (isset($_SESSION['pseudo'])) 
      {
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
          <li><a href="mon_compte.php">Mon compte</a></li>
          <li><a href="first_page_admin.php">Panneau administration</a></li>
          <li><a href="deconnexion.php">Déconnexion</a></li>
          <?php	}
        else {
          ?>
          <li><a href="mon_compte.php">Mon compte</a></li>
          <li><a href="deconnexion.php">Déconnexion</a></li>
          <?php
        }}
      
    else   
      { 
    ?>	<!--affichage d’un lien vers une page permettant de s’inscrire ou de se connecter et du message-->
    <li><a href="connexion.php">Se connecter</a></li>
    <?php	} 
   
    
    ?>




  </ul>
</header>
<!--Footer-->

</body>
</html>

