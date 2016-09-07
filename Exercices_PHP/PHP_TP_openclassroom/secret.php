<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Secret.php</title>
  </head>
  <body>
    <?php
        if (isset($_POST['mdp']) AND $_POST['mdp'] == 'kangourou')
        {
          echo "Les codes secrets sont 'Cou' 'cou' 'les' 'moc' 'hes'";
        }
        else
        {
          echo "Vous n'avez pas accès aux codes secrets, il faut un mdp !";
        }
    ?>
  </body>
</html>
