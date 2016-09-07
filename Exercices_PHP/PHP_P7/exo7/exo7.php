<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>EXERCICE PHP Partie 7</title>
</head>
<body>
  <h1>Exo #7 Partie 7</h1>
  <p>Au formulaire de l'exercice 5,
    ajouter un champ d'envoi de fichier.
    Afficher en plus de ce qui est demandé à l'exercice 6,
    le nom et l'extension du fichier.
  </p>
  <?php
  if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['choix']) && isset($_FILES['monfichier']['name']))
  {
    echo  htmlspecialchars($_POST['choix']). ' ' .htmlspecialchars($_POST['nom']). ' ' .htmlspecialchars($_POST['prenom']). ' ' .$_FILES['monfichier']['name'];

  }
  else {
?>

    <form class="form" action="exo7.php" method="post" enctype="multipart/form-data">
      <select name="choix">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
      </select>
      <input type="text" name="nom" value="" placeholder="nom">
      <input type="text" name="prenom" value="" placeholder="prenom">
      <input type="file" name="monfichier" /><br />
      <input type="submit" value="Valider" />
    </form>

    <?php
  }
  ?>
</body>
</html>
