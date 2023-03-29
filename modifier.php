<title>SuperVoyage</title>
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
<center><h1>Modifier votre mdp & mail</h1>
<table>
    
        <form action="modif_client.php" method="post"> 
            <input type="hidden" name="num" value="<?php echo $ligne['numero'];?>" size="32" maxlength="32"> <br>
            <div  class="btn btn-dark position-relative">
                Courriel : <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
            </div>
            
            <input type="email" name="mail" value="<?php echo  $ligne['mail'];?>" size="32" maxlength="32" required>
            <input type="submit" name="envoi" value="modifier mail" class="btn btn-warning">
        </form>
            <br>
                <br>
        <form action="modif_client.php" method="post">
            <div  class="btn btn-dark position-relative">
                <input type="hidden" name="num" value="<?php echo $ligne['numero'];?>" size="32" maxlength="32">
                Mot de passe : 
            </div>
            <input type="password" name="mdp"  size="32" maxlength="32" required>
            <input type="submit" name="envoi" value="modifier mdp" class="btn btn-warning">
        </form>
        <br>
            <br>
                <br>
        <hr>
        <form action="modif_client.php" method="post">
            <input type="hidden" name="num" value="<?php echo $ligne['numero'];?>" size="32" maxlength="32">
            <div class="container">
                <div class="row"><h2>Modifier vos informations perso</h2>
                    <div class="col">
                        <br>
                            <br>
                        <div  class="btn btn-dark position-relative">
                            <input type="hidden" name="num" value="<?php echo $ligne['numero'];?>" size="32" maxlength="32">
                            
                            Pseudo :
                        </div>
                        <input type="text" name="pseudo"  size="32" maxlength="32" value="<?php echo $ligne['pseudo'];?>" required>
                        <br>
                            <br>
                        <div  class="btn btn-dark position-relative">
                            Nom :
                        </div>
                        <input type="text" name="nom"  size="32" maxlength="32" value="<?php echo $ligne['nom'];?>" required>
                    </div>
                    <div class="col">
                        <br>
                            <br>
                        <div  class="btn btn-dark position-relative">
                            Prenom :
                        </div>
                        <input type="text" name="prenom"  size="32" maxlength="32" value="<?php echo $ligne['prenom'];?>" required>
                        <br>
                            <br>
                        <div  class="btn btn-dark position-relative">
                            Tel :
                        </div>
                        <input type="text" name="tel"  size="32" maxlength="32" value="<?php echo $ligne['tel'];?>" required>
                    </div>
                    <div class="col">
                        <br>
                            <br>
                    
                        <div  class="btn btn-dark position-relative">
                            Adress :
                        </div>
                        <input type="text" name="adress"  size="32" maxlength="32" value="<?php echo $ligne['adress'];?>" required>
                    </div>
                        <br>
                            <br>
                                <br>
                        <input type="submit" name="envoi" value="modifier mes info" class="btn btn-warning">
                </div>
            </div>
        </form>
<br>
</table>
</center>
<?php
include("pages\header+footer\Footer.html");
}
else {
    header('Location: index.php');
}
?>