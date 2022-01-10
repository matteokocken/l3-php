<?php

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.7, deux fonctions particulière', WIDTH_H1, 'left', '*', '*', '*');


echo EOLn;
echo encadre('a) function_exists', WIDTH_H2);

function carre(int $n) : int
{
    return $n * $n;
}

$liste = array('carre', 'errac', 'strlen', 'echo');
foreach ($liste as $funcName)
{
    if (function_exists($funcName))
        echo 'la fonction "' . $funcName . '" existe.' . EOLn;
    else
        echo 'la fonction "' . $funcName . '" n\'existe pas.' . EOLn;
}

echo 'cf. "https://www.php.net/manual/en/function.echo" : "echo is not a function but a language construct"' . EOLn;
echo 'cf. "https://www.php.net/manual/fr/function.echo" : "echo n\'est pas une fonction mais une construction du langage"' . EOLn;
echo 'cf. "https://www.php.net/manual/de/function.echo" : "echo ist keine Funktion, sondern ein Sprachkonstrukt"' . EOLn;


echo EOLn;
echo encadre('b) get_defined_functions', WIDTH_H2);

$a = get_defined_functions();
//print_r($a);
raccourci($a);
echo '"echo" n\'est pas dans la liste, ce qui est cohérent avec le retour
de la fonction "function_exists".' . EOLn;
echo 'On note que la casse n\'est pas discriminante pour les noms de fonctions,
au contraire des noms de variables.' . EOLn;


function raccourci(Array &$a) : void
{
    $b['internal'][0] = $a['internal'][0];
    $b['internal'][1] = $a['internal'][1];
    $b['internal']['...'] = '...';
    $b['internal'][count($a['internal'])-2] = $a['internal'][count($a['internal'])-2];
    $b['internal'][count($a['internal'])-1] = $a['internal'][count($a['internal'])-1];
    $b['user'] = $a['user'];
    print_r($b);
}
