<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 5</title>
  </head>
  <body>
    <h1>Exo #6 Partie_5</h1>
    <p>Avec le tableau de l'exercice 5,
      afficher la valeur de l'index 59.
</p>
    <?php
      $departements = array(
        '60' => 'OISE',
        '80' => 'SOMMES',
        '02' => 'AISNE',
        '59' => 'NORD',
        '62' => 'PAS DE CALAIS'
      );
      echo $departements['59'];
    ?>
  </body>
</html>
