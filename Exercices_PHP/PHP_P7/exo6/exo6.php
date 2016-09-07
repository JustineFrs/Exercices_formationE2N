<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>EXERCICE PHP Partie 7</title>
</head>
<body>
  <h1>Exo #6 Partie 7</h1>
  <p>Avec le formulaire de l'exercice 5,
    Si des données sont passées en POST ou en GET,
    le formulaire ne doit pas être affiché.
    Par contre les données transmises doivent l'être.
    Dans le cas contraire, c'est l'inverse.
    Utiliser qu'une seule page.
</p>
 <?php
 if (isset($_GET['nom']) && isset($_GET['prenom']) && $_GET['prenom'] != NULL && $_GET['nom'] != NULL)
 {
   echo  htmlspecialchars($_GET['choix']). ' ' .htmlspecialchars($_GET['nom']). ' ' .htmlspecialchars($_GET['prenom']);

 }
 else { ?>

   <form class="form" action="exo6.php" method="get">
     <select name="choix">
       <option value="Mr">Mr</option>
       <option value="Mme">Mme</option>
     </select>
     <input type="text" name="nom" value="" placeholder="nom">
     <input type="text" name="prenom" value="" placeholder="prenom">
     <input type="submit" value="Valider" />
   </form>
   <?php
 }
 ?>
</body>
</html>
