<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 4</title>
  </head>
  <body>
    <h1>Exo #5 Partie 4</h1>
    <p>Faire une fonction qui prend en paramètre
      un nombre et une chaine de caractères et
      qui renvoit la concaténation de ces deux paramètres.
</p>
    <?php
    $varString = "Je suis une string";
    $varNb = 5;
      function truc($varString,$varNb){
        return $varString.$varNb;
      }
    ?>
  </body>
</html>
