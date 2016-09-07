<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 4</title>
  </head>
  <body>
    <h1>Exo #4 Partie 4</h1>
    <p>Faire une fonction qui prend en paramètre deux nombres.
      La fonction doit retourner :

    Le premier nombre est plus grand si
    le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si
    le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si
    les deux nombres sont égaux
</p>
    <?php
    $nb1 = 5;
    $nb2 = 10;
    function truc($nb1, $nb2){
      if  ($nb1 > $nb2){
        return "Le premier nombre est plus grand !<br/>";
      }
      elseif ($nb1 < $nb2){
        return "Le premier nombre est plus petit !<br/>";
      }
      else {
        return "Les deux nombres sont identiques !<br/>";
      }
    }
    echo truc($nb1,$nb2);
    ?>
  </body>
</html>
