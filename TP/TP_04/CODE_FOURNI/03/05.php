<?php
    // exo 3.5, tableaux indicés par des nombres

    // compléter le code : il y a plusieurs TODO

    include_once('../UTILS/utils.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" media="screen" type="text/css"
              title="style d" href="05.css" />
    </head>
    <body>
        <h1>exo 3.5, tableaux indicés par des nombres</h1>

        <div>
            <h2>a) avec <code>print_r</code></h2>
            <?php
                function afficheTableau(Array $t)
                {
                    // TODO avec print_r et une seule instruction
                }

                $tab = [ 113, true, 'WoW', ['un', 22], 3.14 ];
                afficheTableau($tab);
            ?>
        </div>

        <div>
            <h2>b) avec <code>for</code></h2>
            <?php
                function afficheTableauBis(Array $t)
                {
                    // TODO en utilisant une boucle for
                    //      - afficher les booléens en toutes lettres
                    //      - appel récursif si une case est un tableau
                }

                $tab = [ 113, true, 'WoW', ['un', 22], 3.14 ];
                afficheTableauBis($tab);
            ?>
        </div>

        <div>
            <h2>c) avec <code>foreach</code></h2>
            <?php
                function afficheTableauTer(Array $t)
                {
                    // TODO idem que ci-dessus mais avec un foreach
                }

                $tab = [ 113, true, 'WoW', ['un', 22], 3.14 ];
                afficheTableauTer($tab);
            ?>
        </div>

        <div>
            <h2>d) ajout/suppression de cases</h2>

            <h3>3 éléments sans préciser les numéros de cases</h3>
            <?php
                // TODO : $villes = ...
                $villes = [];//todo ligne à supprimer, présente pour la compilation
                afficheTableauTer($villes);
            ?>

            <h3>ajout de 2 cases sans préciser les numéros</h3>
            <?php
                // TODO ajouter deux cases à $villes
                afficheTableauBis($villes);
            ?>

            <h3>suppression de 2 cases : une au milieu et la dernière</h3>
            <?php
                // TODO suppression ds cases 1 et 4
                afficheTableau($villes);
                afficheTableauBis($villes);   // plante l'affichage
                afficheTableauTer($villes);
            ?>

            <h3>ajout d'une case sans le numéro</h3>
            <?php
                // TOTO ajout d'une nouvelle case
                afficheTableauTer($villes);
            ?>

            <h3>ajout d'une case en position 10</h3>
            <?php
                // TODO ajout d'une case au delà de la dernière
                afficheTableauTer($villes);
            ?>
        </div>

        <div>
            <h2>e) valeurs et index</h2>

            <h3>on réindexe (<code>array_values</code>)</h3>
            <?php
                // TODO : mettre dans $villes2 le retour de array_values
                $villes2 = [];//todo ligne à supprimer, présente pour la compilation
                afficheTableauTer($villes2);
            ?>

            <h3>on récupère les clés/index (<code>array_keys</code>)</h3>
            <?php
                // TODO : mettre dans $villes2 le retour de array_keys
                $villes = [];//todo ligne à supprimer, présente pour la compilation
                afficheTableauTer($villes2);
            ?>
        </div>

    </body>
</html>
