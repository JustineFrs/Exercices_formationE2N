<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 3</title>
  </head>
  <body>
    <h1>Exo #4 Partie 3</h1>
    <p>Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer de la moitié de sa valeur
</p>
    <?php
      $maVar = 1;
      while($maVar < 10){
      echo $maVar."<br/>";
      $maVar += ($maVar * 0.5);
      }
    ?>
  </body>
</html>
