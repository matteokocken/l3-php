<?php
    // exo 5.1, passage à la ligne

    include_once('../UTILS/utils.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" media="screen" type="text/css"
              title="style d" href="01.css" />
    </head>
    <body>
        <h1>exo 5.1, passage à la ligne</h1>

        <div>
            <h2>a) <code>nl2br</code> avec des apostrophes</h2>
            <?php
                $s = 'une ligne\n2 lignes\n3 lignes';
                $r = nl2br($s);
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
                echo 'Les \n ne sont pas remplacés lorsqu\'ils sont entre apostrophes.';
            ?>
        </div>

        <div>
            <h2>b) <code>nl2br</code> avec des guillemets</h2>
            <?php
                $s = "une ligne\n2 lignes\n3 lignes";
                $r = nl2br($s);
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <div>
            <h2>c) remplacement des \n</h2>
            <?php
                $s = "une ligne\n2 lignes\n3 lignes";
                $r = nl2br($s);
                $r = str_replace("\n", "", $r);
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <div>
            <h2>c) remplacement des \n (autre solution)</h2>
            <?php
                $s = "une ligne\n2 lignes\n3 lignes";
                $r = str_replace("\n", "<br />", $s);
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <div>
            <h2>d) <code>&lt;br /&gt;</code> to <code>\n</code></h2>
            <?php
                $s = 'une ligne<br />2 lignes<br />3 lignes';
                $r = str_replace("<br />", "\n", $s);
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <div>
            <h2>e) <code>&lt;br /&gt;</code>, <code>&lt;br/&gt;</code>, <code>&lt;br&gt;</code> to <code>\n</code></h2>
            <?php
                $s = 'une ligne<br />2 lignes<br/>3 lignes<br>4 lignes';
                $r = str_replace("<br />", "\n", $s);
                $r = str_replace("<br/>", "\n", $r);
                $r = str_replace("<br>", "\n", $r);
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <div>
            <h2>e) <code>&lt;br /&gt;</code>, <code>&lt;br/&gt;</code>, <code>&lt;br&gt;</code> to <code>\n</code> (autre solution)</h2>
            <?php
                $s = 'une ligne<br />2 lignes<br/>3 lignes<br>4 lignes';
                // avec en prime "<br >" qui est reconnu
                $r = preg_replace("<br ?/?>", "\n", $s);
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <div>
            <h2>e) <code>&lt;br /&gt;</code>, <code>&lt;br/&gt;</code>, <code>&lt;br&gt;</code> to <code>\n</code> (autre solution)</h2>
            <?php
                $s = 'une ligne<br />2 lignes<br/>3 lignes<br>4 lignes';
                $r = str_replace(["<br />", "<br/>", "<br>"], "\n", $s);
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>
    </body>
</html>
