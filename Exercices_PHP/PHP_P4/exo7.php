<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 4</title>
  </head>
  <body>
    <h1>Exo #7 Partie 4</h1>
    <p>Faire une fonction qui prend deux paramètres :
      age et genre.
      Le paramètre genre peut prendre comme valeur :

    Homme
    Femme
    La fonction doit renvoyer en fonction des paramètres :
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
    Gérer tous les cas.

</p>
    <?php
    $age = 12;
    $genre = "femme";
      function truc(){
        if($age <= 17 && $genre == "femme"){
         return "Vous êtes une femme mineure";
           }
         elseif($age >= 18 && $genre == "femme"){
           return "Vous êtes une femme majeur";
        }
        elseif($age <= 17 && $genre == "homme"){
         return "Vous êtes un homme mineur";
        }
        elseif ($age >= 18 && $genre == "homme"){
         return "Vous êtes un homme majeur";
       }
       else{
         return "Vous n'êtes rien. Vraiment rien.";
       }
      }
    ?>
  </body>
</html>
