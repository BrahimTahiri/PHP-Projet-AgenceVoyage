<?php
session_start();

//fin de la session en cours
unset($_SESSION['pseudo']);

//redirection vers la page d’accueil
header("Location: index.php" );

?>

