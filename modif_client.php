<?php
session_start();

include('bibliotheque.php');

if (isset($_POST['num'])&&isset( $_POST['mail'])) {
    $num=$_POST['num'];
    $mail = $_POST['mail'];
    $requete = "UPDATE clients 
				SET mail='$mail'
                WHERE numero = '$num';";

$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);
header('Location: modifier.php');
}
else {
    header('Location: index.php');
}
?>

<?php
if (isset($_POST['num'])&&isset($_POST['mdp'])) {
    $num=$_POST['num'];
    $mdp = $_POST['mdp'];
    $mdph = password_hash($mdp, PASSWORD_DEFAULT);
    $requete1 = "UPDATE clients 
				SET mdp='$mdph'
                WHERE numero = '$num';";
    $connexion = connecter();
    $resultat = mysqli_query($connexion, $requete1);
    mysqli_close($connexion);
    header('Location: modifier.php');
}

else {
    header('Location: index.php');
}
?>
<?php 
if (isset($_POST['num'])&&isset($_POST['pseudo'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['tel'])&&isset($_POST['adress'])) {
    $num=$_POST['num'];
    $pseudo=$_POST['pseudo'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $tel=$_POST['tel'];
    $adress=$_POST['adress'];
    $requete2 = "UPDATE clients 
				SET pseudo='$pseudo',prenom='$prenom',nom='$nom',tel='$tel',adress='$adress'
                WHERE numero = '$num';";

    $connexion = connecter();
    $resultat = mysqli_query($connexion, $requete2);
    mysqli_close($connexion);
    
}
?>