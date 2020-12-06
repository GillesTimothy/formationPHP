<?php

if (preg_match('#.{4}#', 'xxxx')){     // . nimporte quel caractere
    echo 'VRAI'; 
} else {
    echo 'FAUX';
}

echo '<p></p>';

if (preg_match('#^[0-9]{2}/[0-9]{2}/[0-9]{4}#', '29/10/1998')){     // . nimporte quel caractere
    echo 'VRAI'; 
} else {
    echo 'FAUX';
}

echo '<p></p>';

$variable = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})#', 'date : $3 - $2 - $1', '29/10/1998');   //retourne la 3eme parenthese -> recup l'annee

echo $variable;   

echo '<p></p>';

$texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
$texte = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte);

?>