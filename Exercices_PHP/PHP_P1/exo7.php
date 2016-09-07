<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP #7</title>
  </head>
  <body>
    <h1>Exo #7 Partie_1</h1>
    <p>Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".</p>
    <?php
      $nom = "TANTAR";
      $prenom = "Antho";
      $age = 22;
      echo "Bonjour ".$nom." ".$prenom." tu as ".$age." ans.";
    ?>
  </body>
</html>
