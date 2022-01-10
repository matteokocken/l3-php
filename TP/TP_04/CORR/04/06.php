<?php

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.6, fonction via une variable', WIDTH_H1, 'left', '*', '*', '*');

function fact(int $n) : int
{
    if ($n == 0)
        return 1;
    else
        return $n * fact($n-1);
}

$f = 'fact';
$a = 6;
$r = $f($a);
echo $a . '! = ' . $r . EOLn;

