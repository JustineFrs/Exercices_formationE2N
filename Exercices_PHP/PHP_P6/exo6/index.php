<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de test exo6 Partie_6</title>
  </head>
  <body>
    <?php
    if (isset($_GET['batiment']) AND isset($_GET['salle']))
    {
      echo $_GET['batiment'] . '<br/>' . $_GET['salle'];
    }
    else
    {
      echo 'Pas de paramètre !';
    }
    ?>
  </body>
</html>
