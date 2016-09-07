<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 5</title>
  </head>
  <body>
    <h1>Exo #4 Partie_5</h1>
    <p>Avec le tableau de l'exercice 1,
      modifier le mois de aout pour lui
      ajouter l'accent manquant.

</p>
    <?php
      $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
      $mois[7] = 'Août';
    ?>
  </body>
</html>
