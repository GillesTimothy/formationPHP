<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=testOC;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
//$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueur_max, commentaires) VALUES(\'sonic\', \'jacquie\', \'ds\', 4, 5, \'herisson\')');

//$bdd->exec('UPDATE jeux_video SET prix = 666, nbre_joueur_max = 32 WHERE nom = "zelda" ');
//$bdd->exec('DELETE FROM jeux_video WHERE nom=\'sonic\'');
$nvprix = 999;
$nv_nb_joueurs = 999;
$nom_jeu = 'sonic';

$req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueur_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
$req->execute(array(
	'nvprix' => $nvprix,
	'nv_nb_joueurs' => $nv_nb_joueurs,
	'nom_jeu' => $nom_jeu
	));

echo 'Le jeu a bien été ajouté !';
?>
