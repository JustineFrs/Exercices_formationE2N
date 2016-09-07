<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 3</title>
  </head>
  <body>
    <h1>Exo #7 Partie 3</h1>
    <p>En allant de 1 à 100 avec un pas de 15,
      afficher le message On tient le bon bout.

</p>
<?php
  for($maVar = 1; $maVar <= 100; $maVar += 15){
  echo $maVar." On tient le bon bout."."<br/>";
  }
?>
  </body>
</html>
