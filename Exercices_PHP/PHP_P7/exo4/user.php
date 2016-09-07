<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_POST['prenom']) && isset($_POST['nom']) && $_POST['prenom'] != NULL && $_POST['nom'] != NULL)
    {
      echo 'Votre prénom : ' . htmlspecialchars($_POST['prenom']) . '<br/>' . 'Votre nom : ' . htmlspecialchars($_POST['nom']);
    }
    else
    {
      echo 'Vous n\'avez pas rempli les champs !';
    }
    ?>
  </body>
</html>
