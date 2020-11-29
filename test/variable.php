<?php

$variable = 20;
$variable2 = 40;
$total = $variable * $variable2;
$message = "bonjour";
$estcevrai = true;

echo $variable;
echo $message . ", je m'appelle timothy";
echo $total;

$prenom[0] = "mathieu";
$prenom[1] = "marie";
echo $prenom[1];

$nom = array("mathieu", "marie", "robert");
echo print_r($nom);
for($var = 0; $var < 3; $var++){
    echo '  ' . $nom[$var];
}

$personne = array('nom' => 'gilles', 'prenom' => 'timothy', 'age' => 18);
echo print_r($personne);

foreach($nom as $noms){
    echo '  ' . $noms;
}

foreach($personne as $libelle => $detail){
    echo '<p> ' . $libelle . ' : ' . $detail . '</p>';
}

?>