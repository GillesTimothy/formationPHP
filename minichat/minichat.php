<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="tigilles" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

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

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message, date_creation FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . ' <i style=color:blue>' . $donnees['date_creation'] . '</i></p>';
}

echo '<p style=color:red><b> juste affichage du jour d\' envois du message </b></p>';

$reponse2 = $bdd->query('SELECT pseudo, message, DAY(date_creation) as jour FROM minichat ORDER BY ID DESC LIMIT 0, 10');
while ($donnees2 = $reponse2->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees2['pseudo']) . '</strong> : ' . htmlspecialchars($donnees2['message']) . ' <i style=color:blue>' . $donnees2['jour'] . '</i></p>';
}

echo '<p style=color:red><b> ajour d\'une date d expiration 15 jour plus tard </b></p>';

$reponse3 = $bdd->query('SELECT pseudo, message, DATE(date_creation) as date_jour, DATE(DATE_ADD(date_creation, INTERVAL 15 DAY)) AS date_expiration FROM minichat ORDER BY ID DESC LIMIT 0, 10');
while ($donnees3 = $reponse3->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees3['pseudo']) . '</strong> : ' . htmlspecialchars($donnees3['message']) . ' <i style=color:blue>' . $donnees3['date_jour'] . '</i>' . ' -> ' . '<i style=color:green>' . $donnees3['date_expiration'] . '</i></p>';
}

$reponse->closeCursor();

?>
    </body>
</html>