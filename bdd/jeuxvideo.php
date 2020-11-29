<?php

//quand le site  sera en ligne : exemple
//$bdd = new PDO('mysql:host=sql.hebergeur.com;dbname=mabase;charset=utf8', 'pierre.durand', 's3cr3t');

$bdd = new PDO('mysql:host=localhost;dbname=testOC', 'root', '');

$requete4 = $bdd->prepare("INSERT INTO jeux_video(nom, possesseur) VALUES(?, ?)");
$requete4->execute(array($_GET['nom'], $_GET['possesseur'])); 


$reponse = $bdd->query("SELECT * from jeux_video where possesseur = 'timothy' order by prix desc");
while($donnees = $reponse->fetch()){   //fetch tant quil y a des donnee.
    echo '<p>' . $donnees['nom'] . ' - ' . $donnees['console'] . ' - ' . $donnees['prix'] . ' euros </p>';
} 

echo '<br>';

//utilisateur qui specifie la console.
$requete = $bdd->prepare("SELECT * from jeux_video where console = ?");
$requete->execute(array('nintendo'));
while($donnees2 = $requete->fetch()){  
    echo '<p>' . $donnees2['nom'] . ' - ' . $donnees2['console'] . ' - ' . $donnees2['prix'] . ' euros </p>';
}

echo '<br>';

if(isset($_GET['console'])){

    $requete2 = $bdd->prepare("SELECT * from jeux_video where console = ?");
    $requete2->execute(array($_GET['console'])); //     http://localhost/formationPHP/bdd/jeuxvideo.php?console=ps4
    while($donnees3 = $requete2->fetch()){   
        echo '<p>' . $donnees3['nom'] . ' - ' . $donnees3['console'] . ' - ' . $donnees3['prix'] . ' euros </p>';
    }

}

?>