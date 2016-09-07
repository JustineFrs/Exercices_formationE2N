<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de test exo1 Partie_6</title>
  </head>
  <body>
    <p>
      <?php
      if (isset($_GET['nom']) AND isset($_GET['prenom']))
      {
        echo 'L\'URL existe bien';
      }
      else
      {
        echo 'L\'URL n\'existe pas !';
      }
      ?>
    </p>
  </body>
</html>
