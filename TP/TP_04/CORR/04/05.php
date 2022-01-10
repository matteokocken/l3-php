<?php

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.5, récursivité', WIDTH_H1, 'left', '*', '*', '*');

function fact(int $n) : int
{
    if ($n == 0)
        return 1;
    else
        return $n * fact($n-1);
}

$a = 6;
$r = fact($a);
echo $a . '! = ' . $r . EOLn;

