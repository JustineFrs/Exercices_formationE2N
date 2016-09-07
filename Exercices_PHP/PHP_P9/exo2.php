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
        <h1>Exercice #2 Partie_9</h1>
        <p>
          Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16).
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <?php
         //affichage jj-mm-aa
          echo date('d-m-y');
         ?>
      </div>
      </div>
  </body>
</html>
