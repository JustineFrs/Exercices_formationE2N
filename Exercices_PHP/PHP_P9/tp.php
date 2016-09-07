<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie_9</title>
        <link rel="stylesheet" href="style.css" media="screen"/>
        <link rel="stylesheet" href="bootstrap.min.css" media="screen"/>
    </head>
    <body>
        <?php
        //Définition du nombre de jours dans le mois
        //définition des variables si aucune entrée
        $mois = 1;
        $annee = 2014;
        //vérification des post des menu_mois et menu_annee
        if (isset($_POST['menu_mois'])) {
            $mois = $_POST['menu_mois'];
        }
        if (isset($_POST['menu_annee'])) {
            $annee = $_POST['menu_annee'];
        }
        //Nombre de jours dans chaque mois, selon année
        $nb_jours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
        //Définition du premier jour du mois
        $premier_jour_mois = date('w', mktime(0, 0, 0, $mois, 1, $annee));
        ?>
        <div class="row">
            <div class="col-lg-offset-2 col-lg-5 block_presentation">
                <h1>TP Partie_9</h1>
                <p>
                    Faire un formulaire avec deux listes déroulantes.
                    La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
                    En fonction des choix, afficher un calendrier comme celui ci :
                </p>
            </div>
            <div class="col-lg-offset-1 col-lg-2 block_exo1">

                <form action="tp.php" method="post">
                    <p>Choisissez le mois: </p>
                    <select name="menu_mois">
                        <option value="1" <?php
                        if ($mois == 1) {
                            echo 'selected';
                        }
                        ?>>Janvier</option>
                        <option value="2" <?php
                        if ($mois == 2) {
                            echo 'selected';
                        }
                        ?>>Février</option>
                        <!--En ternaire : "()"= CONDITION /// "?"= SI /// ":"= SINON-->
                        <option value="3" <?php echo ($mois == 3) ? 'selected' : ''; ?>>Mars</option>
                        <option value="4" <?php echo ($mois == 4) ? 'selected' : ''; ?>>Avril</option>
                        <option value="5" <?php echo ($mois == 5) ? 'selected' : ''; ?>>Mai</option>
                        <option value="6" <?php echo ($mois == 6) ? 'selected' : ''; ?>>Juin</option>
                        <option value="7" <?php echo ($mois == 7) ? 'selected' : ''; ?>>Juillet</option>
                        <option value="8" <?php echo ($mois == 8) ? 'selected' : ''; ?>>Août</option>
                        <option value="9" <?php echo ($mois == 9) ? 'selected' : ''; ?>>Septembre</option>
                        <option value="10" <?php echo ($mois == 10) ? 'selected' : ''; ?>>Octobre</option>
                        <option value="11" <?php echo ($mois == 11) ? 'selected' : ''; ?>>Novembre</option>
                        <option value="12" <?php echo ($mois == 12) ? 'selected' : ''; ?>>Décembre</option>
                    </select><br/>

                    <p>Choisissez l'année: </p>
                    <select name="menu_annee">
                        <?php
                        //Créer liste déroulante
                        for ($an = 1990; $an <= 2020; $an++) {
                            //Concaténation + ternaire
                            echo '<option value="' . $an . '" ' . (($annee == $an) ? 'selected' : '') . ' >' . $an . '</option>';
                        }
                        ?>
                    </select>
                    <input type="submit" name="name" value="envoie">
                </form>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 block_exo">
                <table>
                    <thead>
                        <tr>
                            <th>Dimanche</th>
                            <th>Lundi</th>
                            <th>Mardi</th>
                            <th>Mercredi</th>
                            <th>Jeudi</th>
                            <th>Vendredi</th>
                            <th>Samedi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            //Afficher le 1er jour de chaque mois
                            for ($i = 0; $i <= 6; $i++) {
                                if ($premier_jour_mois == $i) {
                                    echo '<td> 1 </td>';
                                    //Afficher le nombre de jour dans chaque mois
                                    for ($jour = 2; $jour <= $nb_jours; $jour++) {
                                        //Si on arrive au samedi, on passe à la ligne suivante
                                        if ($i == 6) {
                                            echo '<tr></tr>';
                                            //Lié à l'incrémentation $i++ ligne 97, Donne donc la valeur 0 à dimanche
                                            $i = -1;
                                        }
                                        echo '<td>' . $jour . '</td>';
                                        $i++;
                                    }
                                    //ferme la boucle
                                    $i = 6;
                                } else {
                                    echo '<td></td>';
                                }
                            }
                            ?>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
