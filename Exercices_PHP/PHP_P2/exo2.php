<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP #2</title>
  </head>
  <body>
    <h1>Exo #2 Partie_4</h1>
    <p>
      Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
Bonus : L'écrire de deux manières différentes.
    </p>
    <?php
    $isEasy = true ;
    if($isEasy == true){
     echo "C'est facile !";
    }
    else{
     echo "C'est difficile !";
    }

    $isEasy2 = false ;
    if(!$isEasy2){
     echo "C'est facile !";
    }
    else{
     echo "C'est difficile !";
    }
    ?>
  </body>
</html>
