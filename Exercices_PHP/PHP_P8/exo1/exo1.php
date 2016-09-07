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
        <h1>Exercice #1 Partie_8</h1>
        <p>
          Faire une page HTML permettant de donner à l'utilisateur :<br/>
          son User Agent<br/>
          son adresse ip<br/>
          le nom du serveur<br/>
        </p>
      </div>
    </div>
<div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <?php
          echo 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'] . '<br/>';
          //adresse Ip du client /!\ SERVER_ADDR = adresse IP du server
          echo 'Adresse IP : ' . $_SERVER['REMOTE_ADDR'] . '<br/>';
          echo 'Nom du serveur : ' . $_SERVER['SERVER_NAME'] . '<br/>';
        ?>
      </div>
      </div>
  </body>
</html>
