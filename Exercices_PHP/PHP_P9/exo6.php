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
          Afficher le nombre de jour dans le mois de février de l'année 2016.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <?php
        $nb_jours = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        echo 'Nombre de jours en Février 2016 : '.$nb_jours;
         ?>
      </div>
      </div>
  </body>
</html>
