<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 4</title>
  </head>
  <body>
    <h1>Exo #8 Partie 4</h1>
    <p>Faire une fonction qui prend en paramètre
      trois nombres et qui renvoit la somme de
      ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.
</p>
    <?php
    $nb1 = 1;
    $nb2 = 2;
    $nb3 = 3;
      function caractere($nb1 = 0,$nb2 = 0,$nb3 = 0){
        return $nb1 + $nb2 + $nb3;
      }
    ?>
  </body>
</html>
