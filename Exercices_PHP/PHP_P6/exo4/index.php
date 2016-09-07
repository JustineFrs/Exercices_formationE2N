<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de test exo4 Partie_6</title>
  </head>
  <body>
    <?php
    if (isset($_GET['langage']) AND isset($_GET['serveur']))
    {
      echo $_GET['langage'] . '<br/>' . $_GET['serveur'];
    }
    else
    {
      echo 'Pas de paramètre !';
    }
    ?>
  </body>
</html>
