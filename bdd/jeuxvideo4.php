<?php

$bdd = new PDO('mysql:host=localhost;dbname=testOC', 'root', '');

$requete = $bdd->prepare("SELECT LENGTH(nom) as longueur_nom, UPPER(nom) as nom_majuscule, LOWER(console) as console_min, prix from jeux_video where console = ?");
$requete->execute(array($_GET['console'])); //     http://localhost/formationPHP/bdd/jeuxvideo.php?console=ps4
    while($donnees = $requete->fetch()){   
        echo '<p>' . $donnees['longueur_nom'] . ' - ' . $donnees['nom_majuscule'] . ' - ' . $donnees['console_min'] . ' - ' . $donnees['prix'] . ' euros </p>';
    }
$requete2 = $bdd->prepare("SELECT AVG(prix) as moyenne_prix from jeux_video where console = ?");
$requete2->execute(array($_GET['console'])); 
    while($donnees2 = $requete2->fetch()){
      echo '<p> prix moyen des jeux pour la console " ' . $_GET['console'] . ' " : ' . $donnees2['moyenne_prix'] . ' euro </p>';
    } 
    
$requete3 = $bdd->query("SELECT AVG(prix) as moyen_prix, console from jeux_video GROUP BY console HAVING moyen_prix >= 65 ORDER BY moyen_prix");
    while($donnees3 = $requete3->fetch()){
        echo '<p> prix moyen des jeux pour la console " ' . $donnees3['console'] . ' " : ' . $donnees3['moyen_prix'] . ' euro </p>';
    } 

?>