<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TP 2 !</title>
  <link rel="stylesheet" href="bootstrap.min.css" media="screen">
  <link rel="stylesheet" href="style.css" media="screen">
</head>
<body class="fond">
  <div class="row">
    <div class="col-lg-12 block_titre">
      <h1>Formulaire de renseignements</h1>
      <hr/>
    </div>
  </div>

  <div claas="row">
    <div class="col-lg-offset-3 col-lg-6">

      <form class="form" action="index.php" method="post">
        <label for="nom">Votre nom :</label>
        <input type="text" name="nom" placeholder="Nom" value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>"/>
        <br/>
        <label for="nom">Votre prénom :</label>
        <input type="text" name="prenom" placeholder="Prénom" value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>"/>
        <br/>
        <label for="nom">Votre âge :</label>
        <input type="text" name="age" placeholder="Âge" value="<?php if (isset($_POST['age'])){echo $_POST['age'];} ?>"/>
        <br/>
        <label for="nom">Votre société :</label>
        <input type="text" name="societe" placeholder="Société" value="<?php if (isset($_POST['societe'])){echo $_POST['societe'];} ?>"/>
        <br/>
        <input class="btn_envoi" type="submit" name="envoyer" value="Envoyer !"/>
      </form>
      <?php
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['societe'])){
          echo 'Votre nom : '.htmlspecialchars($_POST['nom']). '<br/> Votre prénom : ' .htmlspecialchars($_POST['prenom'])
                . '<br/> Votre âge : ' .htmlspecialchars($_POST['age']). '<br/> Votre prénom : ' .htmlspecialchars($_POST['prenom']);
        }
      ?>
    </div>
  </div>
</body>
</html>
