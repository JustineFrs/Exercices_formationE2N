<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 3</title>
  </head>
  <body>
    <h1>Exo #1 Partie 3</h1>
    <p>Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer
</p>
    <?php
      $maVariable = 0;
      while($maVariable < 10){
        echo $maVariable."<br/>";
        $maVariable++;
      }
      //ou
      $maVariable = 0;
      //var differente de 10
      while($maVariable != 10){
        echo $maVariable."<br/>";
        $maVariable++;
      }
    ?>
  </body>
</html>
