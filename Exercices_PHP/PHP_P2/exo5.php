<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP #5</title>
  </head>
  <body>
    <h1>Exo #5 Partie_4</h1>
    <!--echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';-->
    <?php
      $maVariable = "homme";
      if($maVariable != "homme"){
        echo "C'est une développeuse";
      }
      else{
        echo "C'est un développeur";
      }
    ?>
  </body>
</html>
