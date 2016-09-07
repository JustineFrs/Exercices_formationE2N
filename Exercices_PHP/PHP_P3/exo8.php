<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 3</title>
  </head>
  <body>
    <h1>Exo #8 Partie 3</h1>
    <p>En allant de 200 à 0 avec un pas de 12,
      afficher le message Enfin !!!!.

</p>
    <?php
      for($maVar = 0; $maVar <= 200; $maVar += 12){
      echo $maVar." ENFIN !"."<br/>";
      }
    ?>
  </body>
</html>
