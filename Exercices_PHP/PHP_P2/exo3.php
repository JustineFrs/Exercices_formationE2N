<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP #3</title>
  </head>
  <body>
    <h1>Exo #3 Partie_4</h1>
    <p>
      Créer deux variables age et genre. La variable genre peut prendre comme valeur :
          Homme
          Femme
          En fonction de l'âge et du genre afficher la phrase correspondante :
          Vous êtes un homme et vous êtes majeur
          Vous êtes un homme et vous êtes mineur
          Vous êtes une femme et vous êtes majeur
          Vous êtes une femme et vous êtes mineur
          Gérer tous les cas.
    </p>
    <?php
    $age  = 24;
    $genre = "femme";
    if($age <= 17 && $genre == "femme"){
     echo "Vous êtes une femme mineur";
       }
     else if($age >=18 && $genre == "femme"){
       echo "Vous êtes une femme majeur";
    }
    else if($age <= 17 && $genre == "homme"){
     echo "Vous êtes un homme mineur";
    }
    else if($age >= 17 && $genre == "homme"){
     echo "Vous êtes un homme majeur";
    }
    //Si erreur de la saisie genre ou age
    else{
     echo "Vous êtes quoi ?";
    }
    ?>
  </body>
</html>
