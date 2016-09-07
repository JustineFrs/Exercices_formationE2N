<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie_9</title>
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="bootstrap.min.css" media="screen">
  </head>
  <body>
    <div class="row">
      <div class="col-lg-offset-2 col-lg-5 block_presentation">
        <h1>Exercice #6 Partie_9</h1>
        <p>
          Afficher la date du jour - 22 jours.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <?php
          echo date('d/m/Y', strtotime('-22 days'));
         ?>
      </div>
      </div>
  </body>
</html>
