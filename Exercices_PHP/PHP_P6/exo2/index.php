<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de test exo2 Partie_6</title>
  </head>
  <body>
    <?php
    if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['age']))
    {
      echo $_GET['age'];
    }
    else
    {
      echo 'Il n\'y a pas d\'age !';
    }
    ?>
  </body>
</html>
