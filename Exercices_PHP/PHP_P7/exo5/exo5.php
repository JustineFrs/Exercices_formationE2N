<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>EXERCICE PHP Partie 7</title>
</head>
<body>
  <h1>Exo #5 Partie 7</h1>
  <p>

    Créer un formulaire sur la page index.php avec :

    Une liste déroulante pour la civilité (Mr ou Mme)
    Un champ texte pour le nom
    Un champ texte pour le prénom

    Ce formulaire doit rediriger vers la page index.php.
    Vous avez le choix de la méthode.
  </p>

  <form action="index.php" method="post">
    <label>Prénom :</label>
      <input type="test" name="prenom"/>
    <br/>
    <select name="choix">
      <option value="Femme">Femme</option>
      <option value="Homme">Homme</option>
    </select>
    <br/>
    <label>Nom :</label>
      <input type="test" name="nom"/>
    <input type="submit"/>
  </form>

</body>
</html>
