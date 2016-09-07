<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="bootstrap.min.css" media="screen">
    <title></title>
  </head>
  <body>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_exo">
        <?php
        if(isset($_COOKIE['login']) && isset($_COOKIE['pwd'])){
          echo 'LOGIN : '. $_COOKIE['login']. '<br/>';
          echo 'PASSWORD : '. $_COOKIE['pwd'];
        }
        ?>
      </div>
    </div>
  </body>
</html>
