<?php
//Démarage de la session > obligatoire session_start()
session_start();
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
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <?php
        if(isset($_SESSION['prenom']) && isset($_SESSION['nom']) && isset($_SESSION['age'])){
          echo 'Bonjour '. $_SESSION['prenom']. ' ' .$_SESSION['nom']. ' tu as ' .$_SESSION['age']. ' ans !';
        }
        else {
          echo 'Les variables on étaient détruites !';
        }
        ?>
      </div>
      </div>
  </body>
</html>
<?php
//Fin des variables de session
session_destroy();
?>
