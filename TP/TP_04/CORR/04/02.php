<?php

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.2, paramètres', WIDTH_H1, 'left', '*', '*', '*');


echo EOLn;
echo encadre('a) passage par copie d\'un type simple', WIDTH_H2);

function fa(int $x)
{
    $x ++;
}
unset($a);
$a = 123;
echo 'avant : $a=' . $a . EOLn;
fa($a);
echo 'après : $a=' . $a . EOLn;
echo 'la copie est modifiée et non l\'original.' . EOLn;


echo EOLn;
echo encadre('b) passage par copie d\'un tableau', WIDTH_H2);

function fb(Array $t)
{
    $t[1] = 'BBB';
}
unset($a);
$a = ['aa', 'bb', 'cc'];
echo 'avant : $a=';
print_r($a);
fb($a);
echo 'après : $a=';
print_r($a);
echo 'la copie est modifiée et non l\'original.' . EOLn;
echo 'au contraire du C.' ; EOLn;


echo EOLn;
echo encadre('c) passage par référence', WIDTH_H2);

function fc(Array &$t)
{
    $t[1] = 'BBBB';
}
unset($a);
$a = ['aa', 'bb', 'cc'];
echo 'avant : $a=';
print_r($a);
fc($a);
echo 'après : $a=';
print_r($a);
echo 'l\'original est modifié.' . EOLn;


echo EOLn;
echo encadre('d) passage d\'un littéral par référence', WIDTH_H2);

function fd(int &$x)
{
    $x ++;
}
//fd(13);   // boum
echo 'Une référence sur une constante littérale n\'a pas de sens.' . EOLn;
echo 'Sinon cela signifierai qu\'on peut changer, par exemple, la valeur de 1.' . EOLn;

