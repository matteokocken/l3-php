<?php

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.4, valeur(s) de retour', WIDTH_H1, 'left', '*', '*', '*');

function suite(int $n = 0) : Array
{
    return [$n+1, $n+2, $n+3];
}

list($a, $b, $c) = suite();
echo '$a, $b, $c valent : ' . $a . ', ' . $b . ', ' . $c . EOLn;

list($a, $b, $c) = suite(5);
echo '$a, $b, $c valent : ' . $a . ', ' . $b . ', ' . $c . EOLn;

