<?php

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 5.2, protection SQL', WIDTH_H1, 'left', '*', '*', '*');

echo EOLn;
echo encadre('a) addshlashes', WIDTH_H2);

$s = "foie\"foi'fois\\foix";   // i.e : foie"foi'fois\foix
$r = addslashes($s);
echo 'avant : ->' . $s . '<-' . EOLn;
echo 'après : ->' . $r . '<-' . EOLn;


echo EOLn;
echo encadre('b) stripshlashes', WIDTH_H2);

$s = "a\"b'c\\A\\\"B\\'C\\\\D";   // i.e. : a"b'c\A\"B\'C\\D
$r = stripslashes($s);
echo 'avant : ->' . $s . '<-' . EOLn;
echo 'après : ->' . $r . '<-' . EOLn;
$r = stripslashes($r);
echo 'après : ->' . $r . '<-' . EOLn;
$r = stripslashes($r);
echo 'après : ->' . $r . '<-' . EOLn;

