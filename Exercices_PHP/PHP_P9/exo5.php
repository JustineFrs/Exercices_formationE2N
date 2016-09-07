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
        <h1>Exercice #5 Partie_9</h1>
        <p>
          Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <?php
         //créer une variable date au jour j
         $date1 = new DateTime('now');
         //créer une variable date au 16mai2016
         $date2 = new DateTime('16-05-2016');
         //créer une variable qui compte le nombre qui separe la date 1 et 2
         $interval = $date2->diff($date1);
         echo $interval->format('%R%a days');
         ?>
      </div>
      </div>
  </body>
</html>
