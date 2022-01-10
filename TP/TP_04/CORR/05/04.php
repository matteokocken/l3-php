<?php

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 5.4, URL', WIDTH_H1, 'left', '*', '*', '*');

echo EOLn;
echo encadre('a) urlencode', WIDTH_H2);

$s = "bébé et\nbébête";
$r = urlencode($s);
echo 'avant : ->' . $s . '<-' . EOLn;
echo 'après : ->' . $r . '<-' . EOLn;


echo EOLn;
echo encadre('b) rawurlencode', WIDTH_H2);

$s = "bébé et\nbébête";
$r = rawurlencode($s);
echo 'avant : ->' . $s . '<-' . EOLn;
echo 'après : ->' . $r . '<-' . EOLn;


echo EOLn;
echo encadre('c) urldecode', WIDTH_H2);

$s = "b%C3%A9+a%0Ab%20d";
$r = urldecode($s);
echo 'avant : ->' . $s . '<-' . EOLn;
echo 'après : ->' . $r . '<-' . EOLn;


echo EOLn;
echo encadre('d) rawurldecode', WIDTH_H2);

$s = "b%C3%A9+a%0Ab%20d";
$r = rawurldecode($s);
echo 'avant : ->' . $s . '<-' . EOLn;
echo 'après : ->' . $r . '<-' . EOLn;

