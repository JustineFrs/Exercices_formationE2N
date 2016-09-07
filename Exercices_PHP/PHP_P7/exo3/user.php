<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo3 partie_7</title>
  </head>
  <body>
    <?php
    if(isset($_GET['prenom']) && isset($_GET['nom']) && $_POST['prenom'] != NULL && $_POST['nom'] != NULL)
    {
      echo 'Votre prénom : ' . htmlspecialchars($_GET['prenom']) . '<br/>' . 'Votre nom : ' . htmlspecialchars($_GET['nom']);
    }
    else
    {
      echo 'Vous n\'avez pas rempli les champs !';
    }
    ?>
  </body>
</html>
