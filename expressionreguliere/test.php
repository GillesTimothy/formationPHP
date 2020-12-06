<?php

if (preg_match('#guitare|banjo#i', 'j\'aime la guitare')){  //i -> pas attention MAJ min
    echo 'VRAI';
} else {
    echo 'FAUX';
}

if (preg_match('#PHP$#', 'j\'aime PHP')){  //$ -> php en fin de phrase
    echo 'VRAI';
} else {
    echo 'FAUX';
}

if (preg_match('#^php#i', 'PHP j\'aime ')){  //^ -> php en debut   de phrase
    echo 'VRAI';
} else {
    echo 'FAUX';
}

if (preg_match('#gr[iao]s#', 'la nut tout les chats sont gros')){  //[] -> lettre accepté   [a-zA-Z]  [0-9]
    echo 'VRAI';
} else {
    echo 'FAUX';
}

echo '<p> </p>';

if (preg_match('#Ay(ay){3}?#', 'Ayayayay')){  //ay present dans phrase 3x
    echo 'VRAI';
} else {
    echo 'FAUX';
}

echo '<p> </p>' ;

if (preg_match('#^[0-9]{3,}$#', '730')){     //3 ou plus chiffre .
    echo 'VRAI'; 
} else {
    echo 'FAUX';
}
?>