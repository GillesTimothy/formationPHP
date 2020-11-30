<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=testOC;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO commentaire (id_billets, auteur, commentaire) VALUES(?, ?, ?)');
$req->execute(array($_POST['id_billets'], $_POST['auteur'], $_POST['commentaire']));


echo $_POST['id_billets'];
// Redirection du visiteur vers la page du minichat
header('Location: commentaire.php?billet=' . $_POST['id_billets']);
?>