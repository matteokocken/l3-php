<?php

// compléter le code : il y a beaucoup TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.1, références', WIDTH_H1, 'left', '*', '*', '*');


echo EOLn;
echo encadre('a) copie simple', WIDTH_H2);
unset($a);
unset($b);
$a = 123;
$b = null;  // todo : à supprimer, juste pour éviter une erreur de compilation
// TODO faites une copie de $a dans $b
echo 'avant : $a=' . $a . ' et $b=' . $b . EOLn;
// TODO : modifiez $b
echo 'après : $a=' . $a . ' et $b=' . $b . EOLn;
echo 'todo : expliquer le comportement' . EOLn;


echo EOLn;
echo encadre('b) "copie" par référence', WIDTH_H2);
unset($a);
unset($b);
$a = 123;
$b = null;  // todo : à supprimer, juste pour éviter une erreur de compilation
// TODO faites une copie par référence de $a dans $b
echo 'avant : $a=' . $a . ' et $b=' . $b . EOLn;
// TODO : modifiez $b
echo 'après : $a=' . $a . ' et $b=' . $b . EOLn;
echo 'todo : expliquer le comportement' . EOLn;


echo EOLn;
echo encadre('c) copie simple de tableau', WIDTH_H2);
unset($a);
unset($b);
$a = ['aa', 'bb', 'cc'];
$b = [];  // todo : à supprimer, juste pour éviter une erreur de compilation
// TODO faites une copie de $a dans $b
echo 'avant : $a=';
print_r($a);
echo 'avant : $b=';
print_r($b);
// TODO : modifiez une case de $b
echo 'après : $a=';
print_r($a);
echo 'après : $b=';
print_r($b);
echo 'todo : expliquer le comportement' . EOLn;


echo EOLn;
echo encadre('d) "copie" par référence d\'un tableau', WIDTH_H2);
unset($a);
unset($b);
$a = ['aa', 'bb', 'cc'];
$b = [];  // todo : à supprimer, juste pour éviter une erreur de compilation
// TODO faites une copie par référence de $a dans $b
echo 'avant : $a=';
print_r($a);
echo 'avant : $b=';
print_r($b);
// TODO : modifiez une case de $b
echo 'après : $a=';
print_r($a);
echo 'après : $b=';
print_r($b);
echo 'todo : expliquer le comportement' . EOLn;


echo EOLn;
echo encadre('e) "copie" par référence d\'un tableau (bis)', WIDTH_H2);
unset($a);
unset($b);
$a = ['aa', 'bb', 'cc'];
$b = [];  // todo : à supprimer, juste pour éviter une erreur de compilation
// TODO faites une copie par référence de $a dans $b
echo 'avant : $a=';
print_r($a);
echo 'avant : $b=';
print_r($b);
// TODO : affecter un nouveau tableau à $b
echo 'après : $a=';
print_r($a);
echo 'après : $b=';
print_r($b);
echo 'todo : expliquer le comportement' . EOLn;

