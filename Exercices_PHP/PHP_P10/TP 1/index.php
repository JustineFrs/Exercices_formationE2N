<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TP 1 !</title>
    <link rel="stylesheet" href="bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="style.css" media="screen">
  </head>
  <body class="fond">
    <div class="row">
      <div class="col-lg-12 block_titre">
        <h1>Formulaire d'inscription à une formation</h1>
        <hr/>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 block_perso">
    <h2>Informations personnelles</h2><hr/>

    <?php
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_naiss']) && isset($_POST['pays']) && isset($_POST['natio'])
     && isset($_POST['adresse']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['diplome']) && isset($_POST['num_pole'])
     && isset($_POST['lien_code']) && isset($_POST['badges']) && isset($_POST['hero']) && isset($_POST['hack']) && isset($_POST['xp_pro'])
     //if $post vide :
     && !empty($_POST))
     //ou :
     //&& $_POST['prenom'] != NULL && $_POST['nom'] != NULL && $_POST['date_naiss'] != NULL && $_POST['pays'] != NULL && $_POST['natio'] != NULL
     //&& $_POST['adresse'] != NULL && $_POST['email'] != NULL && $_POST['tel'] != NULL && $_POST['diplome'] != NULL && $_POST['num_pole'] != NULL
     //&& $_POST['lien_code'] != NULL && $_POST['badges'] != NULL && $_POST['hero'] != NULL && $_POST['hack'] != NULL && $_POST['xp_pro'] != NULL)
    {
      echo  'Votre nom : '.htmlspecialchars($_POST['nom']). '<br/> Votre prénom : ' .htmlspecialchars($_POST['prenom']). '<br/> Votre date de naissance : ' .htmlspecialchars($_POST['date_naiss'])
      . '<br/> Votre pays : ' .htmlspecialchars($_POST['pays']). '<br/> Votre Nationalité : ' .htmlspecialchars($_POST['natio']). '<br/> Votre adresse : ' .htmlspecialchars($_POST['adresse'])
      . '<br/> Votre email : ' .htmlspecialchars($_POST['email']). '<br/> Votre numéro de téléphone : ' .htmlspecialchars($_POST['tel']). '<br/> Vos diplômes : ' .htmlspecialchars($_POST['diplome'])
      . '<br/> Votre numéro pôle emploi : ' .htmlspecialchars($_POST['num_pole']). '<br/> Votre lien Codecademy : ' .htmlspecialchars($_POST['lien_code'])
      . '<br/> Votre nombre de badges : ' .htmlspecialchars($_POST['badges']). '<br/> Votre super héro : ' .htmlspecialchars($_POST['hero'])
      . '<br/> Vos hacks : ' .htmlspecialchars($_POST['hack']). '<br/> Vos expériences informatiques : ' .htmlspecialchars($_POST['xp_pro']);
    }
    else { ?>

    <form class="form" action="index.php" method="post">
      <label for="nom">Votre nom : *</label>
        <input type="text" name="nom" placeholder="Nom"/>
        <br/>
      <label for="prenom">Votre prénom : *</label>
        <input type="text" name="prenom" placeholder="Prénom"/>
        <br/>
      <label for="date_naiss">Votre date de naissance : *</label>
        <input type="text" name="date_naiss" placeholder="Date de naissance"/>
        <br/>
      <label for="pays">Votre pays de naissance : *</label>
        <input type="text" name="pays" placeholder="Pays de naissance"/>
        <br/>
      <label for="natio">Votre nationalité : *</label>
        <input type="text" name="natio" placeholder="Nationalité"/>
        <br/>
      <label for="adresse">Votre adresse : *</label>
        <input type="text" name="adresse" placeholder="Adresse"/>
        <br/>
      <label for="email">Votre email : *</label>
        <input type="text" name="email" placeholder="Email"/>
        <br/>
      <label for="tel">Votre téléphone : *</label>
        <input type="text" name="tel" placeholder="Téléphone"/>
        <br/>
      <label for="diplome">Vos diplômes : *</label>
        <input type="text" name="diplome" placeholder="Diplôme(s)"/>
        <br/>
      <label for="num_pole">Votre numéro Pôle emploi : *</label>
        <input type="text" name="num_pole" placeholder="Numéro Pôle emploi"/>
        <br/>
    </div>
</div>

<div class="row">
  <div class="col-lg-offset-3 col-lg-6 block_perso">
      <h2>Informations relatives à la formation</h2><hr/>
      <label for="lien_code">Votre lien Codecademy : *</label>
        <input type="text" name="lien_code" placeholder="Lien Codecademy"/>
        <br/>
      <label for="badges">Votre nombre de badges : *</label>
        <input type="text" name="badges" placeholder="Nombre de badges"/>
        <br/>
      <label for="hero">Si vous étiez un(e) super héro/héroïne, qui seriez-vous et pourquoi ? *</label>
        <textarea rows="3" cols="70" type="text" name="hero" placeholder="Hero(ïne)"></textarea>
        <br/>
      <label for="hack">Racontez-nous un de vos "hacks" (pas obligatoirement technique ou informatique). *</label>
        <textarea rows="3" cols="70" type="text" name="hack" placeholder="Hacks"></textarea>
        <br/>
      <label for="xp_prog">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? *</label>
        <textarea rows="3" cols="70" type="text" name="xp_pro" placeholder="Expèrience(s)"></textarea>
        <br/>
        <input class="btn_envoi" type="submit" name="envoyer" value="Envoyer !">
        <p>*Veuillez remplir tous les champs</p>
      </div>
    </div>
    </form>

<?php } ?>
  </body>
</html>
