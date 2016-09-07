<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['choix']))
    {
      echo 'Votre prénom : ' . htmlspecialchars($_POST['prenom']) . '<br/>' . 'Vous êtes un(e) : ' . htmlspecialchars($_POST['choix']) .  '<br/>' . 'Votre nom : ' . htmlspecialchars($_POST['nom']);
    }
    else
    {
      echo 'Vous n\'avez pas rempli les champs !';
    }
    ?>
  </body>
</html>
