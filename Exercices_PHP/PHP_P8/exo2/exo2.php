<?php
//Démarage de la session > obligatoire session_start()
session_start();
$_SESSION['prenom'] = 'Juju';
$_SESSION['nom'] = 'FRS';
$_SESSION['age'] = 24;
//Eviter les failles de sécurité en gardant les variables de session
session_write_close();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie_8</title>
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="bootstrap.min.css" media="screen">
  </head>
  <body>
    <div class="row">
      <div class="col-lg-offset-2 col-lg-5 block_presentation">
        <h1>Exercice #2 Partie_8</h1>
        <p>
          Sur la page index, faire un lien vers une autre page.
          Passer d'une page à l'autre le contenu des variables
          <strong>nom</strong>, <strong>prenom</strong> et <strong>age</strong> grâce aux sessions.
          Ces variables auront été définies directement dans le code.
          Il faudra afficher le contenu de ces variables sur la deuxième page.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <a href="index.php">Lien vers autre page !</a>
      </div>
      </div>
  </body>
</html>
