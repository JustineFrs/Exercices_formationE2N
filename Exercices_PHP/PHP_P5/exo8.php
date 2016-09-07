<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 5</title>
  </head>
  <body>
    <h1>Exo #8 Partie_5</h1>
    <p>Avec le tableau de l'exercice 1 et une boucle,
      afficher toutes les valeurs de ce tableau.
    </p>
    <?php
      $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
      foreach($mois as $element){
        echo $element . '<br />';
      }
    ?>
  </body>
</html>
