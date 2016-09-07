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
        <h1>Exercice #3 Partie_9</h1>
        <p>
          Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
          Bonus : Le faire en français.
          </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <?php
        setlocale (LC_TIME, 'fr_FR.utf8');
        echo date('l d F Y.').'<br/>';
        echo strftime('%A %d %B %Y.');
         ?>
      </div>
      </div>
  </body>
</html>
