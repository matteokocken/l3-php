<?php

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 5.5, hashage', WIDTH_H1, 'left', '*', '*', '*');

function compare(String $s1, String $s2, $prefix = '') : void
{
    echo $prefix;
    if ($s1 === $s2)
        echo 'même hashage';
    else
        echo 'hashages différents';
    echo EOLn;
}

// le mot de passe qui va être hashé par différents algorithmes
$not_encoded = "toto";
echo EOLn;
echo 'Le mot de passe en clair est : ->' . $not_encoded . '<-' . EOLn;

// note : on appelle systématiquement deux fois la fonction pour voir
//      : si c'est le même hash qui est généré chaque fois

//----------------------------------------------------------------------------
echo EOLn;
echo encadre('a) md5', WIDTH_H2);

$r1 = md5($not_encoded);
$r2 = md5($not_encoded);
echo '      -> ' . $r1 . EOLn;
echo '(bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '         ');
echo 'Injectez ce hash dans le site "https://md5decrypt.net" ou "https://md5hashing.net"' . EOLn;


//----------------------------------------------------------------------------
echo EOLn;
echo encadre('b) crypt', WIDTH_H2);

echo 'avec le grain de sel "salt" :' . EOLn;
$r1 = crypt($not_encoded, 'salt');
$r2 = crypt($not_encoded, 'salt');
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');

echo 'avec le grain de sel "pepper" :' . EOLn;
$r1 = crypt($not_encoded, 'pepper');
$r2 = crypt($not_encoded, 'pepper');
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');


//----------------------------------------------------------------------------
echo EOLn;
echo encadre('c) sha1', WIDTH_H2);

$r1 = sha1($not_encoded);
$r2 = sha1($not_encoded);
echo '      -> ' . $r1 . EOLn;
echo '(bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '         ');


//----------------------------------------------------------------------------
echo EOLn;
echo encadre('d) password_hash', WIDTH_H2);

echo 'avec "PASSWORD_DEFAULT" :' . EOLn;
$r1 = password_hash($not_encoded, PASSWORD_DEFAULT);
$r2 = password_hash($not_encoded, PASSWORD_DEFAULT);
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');

echo 'avec "PASSWORD_BCRYPT" :' . EOLn;
$r1 = password_hash($not_encoded, PASSWORD_BCRYPT);
$r2 = password_hash($not_encoded, PASSWORD_BCRYPT);
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');

echo 'avec "PASSWORD_ARGON2I" :' . EOLn;
$r1 = password_hash($not_encoded, PASSWORD_ARGON2I);
$r2 = password_hash($not_encoded, PASSWORD_ARGON2I);
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');

echo 'avec "PASSWORD_ARGON2ID" :' . EOLn;
$r1 = password_hash($not_encoded, PASSWORD_ARGON2ID);
$r2 = password_hash($not_encoded, PASSWORD_ARGON2ID);
echo '         -> ' . $r1 . EOLn;
echo '   (bis) -> ' . $r2 . EOLn;
compare($r1, $r2, '            ');


//----------------------------------------------------------------------------
echo EOLn;
echo encadre('e) coût imposé', WIDTH_H2);

printf("coût : temps en seconde(s) : attention à la température du processeur\n");
for ($i = 8; $i <= 18; $i ++)
{
    $start = microtime(true);
    password_hash("test", PASSWORD_BCRYPT, ["cost" => $i]);
    $end = microtime(true);
    printf("%4d : %9.f\n", $i, $end - $start);
}


//----------------------------------------------------------------------------
echo EOLn;
echo encadre('f) pour les curieux', WIDTH_H2);


$m1 = 'QNKCDZO';
$m2 = 'A169818202';
$r1 = md5($m1);
$r2 = md5($m2);
echo 'mdp1 : ' . $m1 . EOLn;
echo 'mdp2 : ' . $m2 . EOLn;
if ($r1 == $r2)
{
    echo 'Les mots de passe ont les mêmes encodages !!!' . EOLn;
    echo 'Aurait-on trouvé une collision ???' . EOLn;
    // décommenter les 3 lignes
    //echo 'mdp1 : ' . $r1 . EOLn;
    //echo 'mdp2 : ' . $r2 . EOLn;
    //echo 'où est le problème ?' . EOLn;
}


