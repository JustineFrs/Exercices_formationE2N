<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tp openclassroom</title>
  </head>
  <body>
    <h1>TP OPENCLASSROOMS</h1>

    <?php
    // Verification des URL + Securité hack & suppression dans barre d'adresse.
    if (isset($_POST['mdp']) AND $_POST['mdp'] == 'kangourou')
    {
      echo "Les codes secrets sont 'Cou' 'cou' 'les' 'moc' 'hes'";

    }
    else {
      echo "Vous n'avez pas accès aux codes, veuillez saisir le bon mdp :";
    ?>

      <form action="formulaire.php" method="post">
        <input type="password" name="mdp"/>
        <input type="submit"/>
      </form>

    <?php
    }
    ?>
  </body>
</html>
