<?php

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.1, références', WIDTH_H1, 'left', '*', '*', '*');


echo EOLn;
echo encadre('a) copie simple', WIDTH_H2);
unset($a);
unset($b);
$a = 123;
$b = $a;
echo 'avant : $a=' . $a . ' et $b=' . $b . EOLn;
$b += 111;
echo 'après : $a=' . $a . ' et $b=' . $b . EOLn;
echo '$b est une copie indépendante de $a, donc seule $b est modifiée.' . EOLn;


echo EOLn;
echo encadre('b) "copie" par référence', WIDTH_H2);
unset($a);
unset($b);
$a = 123;
$b = &$a;
echo 'avant : $a=' . $a . ' et $b=' . $b . EOLn;
$b += 111;
echo 'après : $a=' . $a . ' et $b=' . $b . EOLn;
echo '$a et $b sont deux noms pour la même variable.' . EOLn;


echo EOLn;
echo encadre('c) copie simple de tableau', WIDTH_H2);
unset($a);
unset($b);
$a = ['aa', 'bb', 'cc'];
$b = $a;
echo 'avant : $a=';
print_r($a);
echo 'avant : $b=';
print_r($b);
$b[1] = 'BBBB';
echo 'après : $a=';
print_r($a);
echo 'après : $b=';
print_r($b);
echo '$b est une copie indépendante de $a, donc seule $b est modifiée.' . EOLn;
echo 'Donc PHP fait une copie récursive lors d\'une affectation d\'un tableau.' . EOLn;


echo EOLn;
echo encadre('d) "copie" par référence d\'un tableau', WIDTH_H2);
unset($a);
unset($b);
$a = ['aa', 'bb', 'cc'];
$b = &$a;
echo 'avant : $a=';
print_r($a);
echo 'avant : $b=';
print_r($b);
$b[1] = 'BBBB';
echo 'après : $a=';
print_r($a);
echo 'après : $b=';
print_r($b);
echo '$a et $b sont deux noms pour la même variable.' . EOLn;


echo EOLn;
echo encadre('e) "copie" par référence d\'un tableau (bis)', WIDTH_H2);
unset($a);
unset($b);
$a = ['aa', 'bb', 'cc'];
$b = &$a;
echo 'avant : $a=';
print_r($a);
echo 'avant : $b=';
print_r($b);
$b = [11, 22, 33];
echo 'après : $a=';
print_r($a);
echo 'après : $b=';
print_r($b);
echo '$a et $b sont deux noms pour la même variable.' . EOLn;
echo 'Le fait de modifier une case ou tout le tableau ne change rien.' . EOLn;

