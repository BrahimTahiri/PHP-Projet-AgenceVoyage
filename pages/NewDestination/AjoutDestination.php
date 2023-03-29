

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="pages/NewDestination/NewDest.css">
    <title>SuperVoyage</title>
</head>
<body>
<br>
    <center>
    <a href="choix_sup_ajout.php">
        <button type="button" id="b1" class="btn btn-secondary">Retour</button></a><br>
    <div id="form-main">
        <div id="form-div">
            <form action="pages\NewDestination\traitementDestination.php" method="post">
            
            <p class="name">
              <input name="nomPays" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom du Pays" id="name" />
            </p>
            
            <p class="nom">
              <input name="nomVille" type="text" class="validate[required,custom[nom]] feedback-input" placeholder="Nom de la Ville"/>
            </p>
            
            <p class="text">
              <textarea name="description" class="validate[required,length[6,300]] feedback-input" placeholder="La Description ?"></textarea>
            </p>
            
            
            <div class="submit">
              <input type="submit" value="SEND" id="button-blue"/>
              <div class="ease"></div>
            </div>
          </form>
        </div>
</body>
</html>