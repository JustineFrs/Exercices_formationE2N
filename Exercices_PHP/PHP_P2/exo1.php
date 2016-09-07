<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP #1</title>
  </head>
  <body>
    <h1>Exo #1 Partie_4</h1>
    <p>
      Créer une variable age et l'initialiser avec une valeur.
      Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur.
      Dans le cas contraire, afficher Vous êtes mineur.
    </p>
    <?php
      $age = 24;
      if( $age >= 18){
        echo "Vous êtes majeur";
      }
      else{
        echo "Vous êtes mineur";
      }
    ?>
  </body>
</html>
