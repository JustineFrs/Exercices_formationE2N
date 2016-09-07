<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Methode formulaire Prenom-->

      <p>Bonjour <?php echo htmlspecialchars($_POST['prenom']); ?></p>

    <!-- Methode CHECKBOX -->
    <?php
    if(isset($_POST['vegetarien']))
    {
      echo '</p>Vous êtes végétarien !</p>';
    }
    else
    {
      echo '</p>Vous n\'êtes végétarien !</p>';
    }
    ?>
  </body>
</html>
