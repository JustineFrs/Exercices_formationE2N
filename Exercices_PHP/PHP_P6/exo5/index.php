<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de test exo5 Partie_6</title>
  </head>
  <body>
    <?php
    if (isset($_GET['semaine']))
    {
      echo $_GET['semaine'] . '<br/>';
    }
    else
    {
      echo 'Pas de paramètre !';
    }
    ?>
  </body>
</html>
