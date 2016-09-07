<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 5</title>
  </head>
  <body>
    <h1>Exo #10 Partie_5</h1>
    <p>Avec le tableau de l'exercice 5,
      afficher toutes les valeurs de ce tableau ainsi
       que les clés associés.
Cela pourra être, par exemple, de la forme :
"Le département" + nom_departement + "a le numéro"
+ num_departement
</p>
    <?php
      $departements = array(
        '60' => 'OISE',
        '80' => 'SOMMES',
        '02' => 'AISNE',
        '59' => 'NORD',
        '62' => 'PAS DE CALAIS',
      );
      $departements[51] = 'MARNE';
      foreach($departements as $cle => $element){
        echo 'Le département ' . $element . ' à la numéro ' . $cle . '<br />';
      }
    ?>
  </body>
</html>
