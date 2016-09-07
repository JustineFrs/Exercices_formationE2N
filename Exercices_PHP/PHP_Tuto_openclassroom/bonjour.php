<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tuto OpenClassRoom</title>
  </head>
  <body>

    <p>
      <?php
      if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter']))
      {
        $nbrepeter = (int) $_GET['repeter'];

        if($nbrepeter >= 0 && $nbrepeter < 100)
        {
          for($repetition = 0; $repetition <= $nbrepeter; $repetition++)
          {
            echo 'Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'] . '<br/>';
          }
        }
        else
        {
          echo 'La répétion n\'est pas comprise entre 1 et 100';
        }
      }
      else
      {
        echo 'Pas de nom ou de prénom défini !';
      }
      ?>
    </p>

  </body>
</html>
