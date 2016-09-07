<?php
//verufication des variables si ok, création des cookies sur un an
  if(isset($_POST['login']) && isset($_POST['pwd'])){
    setcookie('login', htmlspecialchars($_POST['login']), time()+365*24*3600, "/", null, false, true);
    // "/" > sert dans tout le vhost, à l'inverse null garde sur la page uniquement
    setcookie('pwd', htmlspecialchars($_POST['pwd']), time()+365*24*3600, "/", null, false, true);
  }
  else {

  }
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
        <h1>Exercice #3 Partie_8</h1>
        <p>
          Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
          A la validation du formulaire, stocker les informations dans un cookie.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <form method="post" action="exo3.php">
        <label>Login :</label>
          <input type="test" name="login"/>
        <label>Password :</label>
          <input type="password" name="pwd"/>
        <input type="submit" name="Envoyer"/>
      </form>
      </div>
      </div>
  </body>
</html>
