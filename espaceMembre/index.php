<?php
    session_start();
    define('SESSION_ID',session_id());
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Site web</title>
        </head>
        <body>
            <a href="http://localhost/FormationPhp/espaceMembre/inscription.php">S'inscrire</a>
            <a href="http://localhost/FormationPhp/espaceMembre/connexion.php">Se connecter</a>
            <a href="http://localhost/FormationPhp/espaceMembre/deconnexion_post.php">Se déconnecter</a><br/>
        <?php


        if($_SESSION != null){
            echo 'Bienvenue : ' . $_SESSION['pseudo'];
        }
        ?>
        </body>
    </html>
</DOCTYPE>