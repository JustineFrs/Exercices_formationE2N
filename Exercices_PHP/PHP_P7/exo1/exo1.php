<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXERCICE PHP Partie 6</title>
  </head>
  <body>
    <h1>Exo #1 Partie 6</h1>
    <p>Créer un formulaire demandant le nom et le prénom.
      Ce formulaire doit rediriger vers la page user.php
      avec la méthode GET.
    </p>
    <form action="user.php" method="get">
      <label for="prenom">Prénom :</label>
      <input type="test" name="prenom"/>
      <label for="nom">Nom :</label>
      <input type="test" name="nom"/>
      <input type="submit"/>
    </form>
  </body>
</html>
