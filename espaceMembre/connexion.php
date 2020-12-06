<?php
session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Connexion</title>
        </head>
        <body align="center">
            <form method="post" action="connexion_post.php">
                <label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" required="required" value="<?php $_SESSION['pseudo']; ?>"><br />
                <label for="password">Mot de passe</label><input type="password" name="password" id="password" required="required"> <br/>
                <label for="connexionAuto">Connexion automatique</label><input type="checkbox" id="connexionAuto" name="connexionAuto">
                <input type="submit" value="Se connecter">
            </form>
        </body>
    </html>
</DOCTYPE>