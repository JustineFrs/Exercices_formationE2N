<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 4</title>
  </head>
  <body>
    <h1>Exo #6 Partie 4</h1>
    <p>Faire une fonction qui prend trois paramètres :
      nom, prenom et age.
      Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prenom + ",tu as" + age + "ans".
</p>
    <?php
    $varNom = "Frs";
    $varPrenom = "Juju";
    $varAge = 24;
      function caractere($varNom, $varPrenom, $varAge){
        return "Bonjour " . $varNom . " " . $varPrenom . "tu as " . $varAge . "ans";
      }
    ?>
  </body>
</html>
