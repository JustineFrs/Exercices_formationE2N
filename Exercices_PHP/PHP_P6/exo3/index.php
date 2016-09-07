<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de test exo3 Partie_6</title>
  </head>
  <body>
    <?php
    if (isset($_GET['dateDebut']) AND isset($_GET['dateFin']))
    {
      echo $_GET['dateDebut'] . '<br/>' . $_GET['dateFin'];
    }
    else
    {
      echo 'Il n\'y a pas de date !';
    }
    ?>
  </body>
</html>
