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
        <h1>Exercice #4 Partie_9</h1>
        <p>
          Afficher le timestamp du jour.
          Afficher le timestamp du mardi 2 août 2016 à 15h00.
</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <?php
          echo time('d/m/Y'). '<br/>';
          $date = date_create('02-08-2016 15:00');
          echo date_timestamp_get($date). '<br/>';
          //ou mktime
          echo mktime(15,0,0,8,2,2016);
         ?>
      </div>
      </div>
  </body>
</html>
