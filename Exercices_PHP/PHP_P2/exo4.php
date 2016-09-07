<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP #4</title>
  </head>
  <body>
    <h1>Exo #4 Partie_4</h1>
    <p>
      L'échelle de Richter est un outil de mesure qui permet
      de définir la magnitude de moment d'un tremblement
      de terre. Cette échelle va de 1 à 9.
      Créer une variable magnitude.
       Selon la valeur de magnitude,
       afficher la phrase correspondante.
    </p>
    <?php
    $magnitude = 5;
    switch ($magnitude){
      case 1:
      echo "Micro-séisme impossible à ressentir.";
      break;
      case 2:
      echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
      break;
      case 3:
      echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
      break;
      case 4:
      echo "Séisme capable de faire bouger des objets mais ne causant générallement pas de dégats.";
      break;
      case 5:
      echo "Séisme capable de faire bouger des objets mais ne causant générallement pas de dégats.";
      break;
      case 6:
      echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
      break;
      case 7:
      echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
      break;
      case 8:
      echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
      break;
      case 9:
      echo "Séisme capable de tout détruire sur une très vaste zone.";
      break;
      //valeur par defaut, aucun des chiffres case n'est demandé
      default:
      echo  "rien du tout";
      break;
    }
    ?>

  </body>
</html>
