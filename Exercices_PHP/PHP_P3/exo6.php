<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 3</title>
  </head>
  <body>
    <h1>Exo #6 Partie 3</h1>
    <p>En allant de 20 à 0 avec un pas de 1,
      afficher le message C'est presque bon.
</p>
    <?php
      for($maVar = 20; $maVar >= 0; $maVar--){
      echo $maVar." C'est presque bon."."<br/>";
      }
    ?>
  </body>
</html>
