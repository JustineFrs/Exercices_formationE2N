<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 4</title>
  </head>
  <body>
    <h1>Exo #3 Partie 4</h1>
    <p>Faire une fonction qui prend en paramètre
      deux chaines de caractères
      et qui revoit la concaténation de ces deux chaines
</p>
    <?php
    $varString = "Je suis une string";
    $varStringAussi = "Je suis une autre string";
      function truc($varString,$varStringAussi){
        return $varString . " " . $varStringAussi;
      }
      echo  $varString . " " . $varStringAussi;
    ?>
  </body>
</html>
