<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tuto OpenClassRoom</title>
  </head>
  <body>
    <h1>Tuto OpenClassRoom</h1>
    <h2>Paramètres d'URL et FORMULAIRES</h2>
    <h3>URL</h3>

      <a href="bonjour.php?nom=Frs&amp;prenom=Juju">Dis moi bonjour !</a>

    <h3>FORMULAIRES</h3>

    <form action="cible.php" method="post">
      <label>Prénom :
        <input type="test" name="prenom"/>
      </label>
      <input type="submit"/>
<br/>
      <label>Êtes vous végétarien ?
        <input type="checkbox" name="vegetarien"/>
      </label>
      <input type="submit"/>

    </form>

  </body>
</html>
