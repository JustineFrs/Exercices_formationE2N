<!DOCTYPE html>
<html>
  <head>
    <title>Ceci est une page de test avec des balises PHP</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h2>Page de test</h2>
  <!--Afficher du texte dans une balise php-->
    <?php echo "Ceci est du texte"; ?><br />
  <!--Insèrer une balise HTML dans une balise php-->
    <?php echo "Ceci est du <strong>texte</strong>"; ?><br />
  <!--Afficher des Guillemets "\" dans une balise php-->
    <?php echo "Cette ligne a été écrite \"uniquement\" en PHP."; ?><br />

    <p>
      Cette ligne a été écrite entièrement en HTML.<br />
      <?php echo "Celle-ci a été écrite entièrement en PHP."; ?>
    </p>
<!--iNCLUSION DES PAGES-->

<!-- L'en-tête -->

<header>

</header>
<!--Inclusion de php direction menu.php-->
<?php include("menu.php"); ?>

<nav id="menu">
    <div class="element_menu">
        <h3>Titre menu</h3>
        <ul>
            <li><a href="page1.html">Lien</a></li>
            <li><a href="page2.html">Lien</a></li>
            <li><a href="page3.html">Lien</a></li>
        </ul>
    </div>
</nav>

<!-- Le corps -->
<!--ICI remplacer l'HTML par include(); avec le nom du fichier correspondant-->
<div id="corps">
    <h1>Mon super site</h1>
    <p>
        Bienvenue sur mon super site !<br />
        Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
    </p>
</div>

<!-- Le pied de page -->

<footer id="pied_de_page">
    <p>Copyright moi, tous droits réservés</p>
</footer>

<?php
//SWITCH PLUTOT QUE IF ELSE ELSEIF
$note = 10;
switch ($note) // on indique sur quelle variable on travaille
{
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    case 12:
        echo "Tu es assez bon";
    break;
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";

}

?>

</body>
</html>
