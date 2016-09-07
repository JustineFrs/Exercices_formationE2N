<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 3</title>
  </head>
  <body>
    <h1>Exo #2 Partie 3</h1>
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieur à 20 :

    multiplier la première variable avec la deuxième
    afficher le résultat
    incrementer la première variable

</p>
    <?php
      $maVar1 = 0;
      $maVar2 = 42;
      //tant que var1 pas superieur à 20, multiplier et incérementer
      while($maVar1 <= 20){
      echo $maVar1 * $maVar2."<br/>";
      $maVar1++;
      }
    ?>
  </body>
</html>
