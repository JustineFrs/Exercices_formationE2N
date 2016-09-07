<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 4</title>
  </head>
  <body>
    <h1>Exo #2 Partie 4</h1>
    <p>Faire une fonction qui prend en paramètre
      une chaine de caractères et qui retourne
      cette même chaine.
</p>
    <?php
    $varString = "Je suis une string";
          function affiche($varAffiche){
            return $varAffiche;
          }
          echo affiche($varString);
    ?>
  </body>
</html>
