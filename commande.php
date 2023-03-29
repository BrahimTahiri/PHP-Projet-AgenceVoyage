<title>SuperVoyage</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php
include("pages\header+footer\header.php");
if  (isset($_SESSION['pseudo'])) 
      {
?>
<br>
    <br>
        <br>
            <br>
            <center><a class="btn btn-secondary" href="Mon_compte.php" role="button">Retour</a></center>
<br>
    <br>
        <br>
            <br>
                <br>
                    <br>
<?php 
include("pages/mon_compte/liste.php");
?>

<?php
include("pages\header+footer\Footer.html");
}
else {
    header('Location: index.php');
}
?>
