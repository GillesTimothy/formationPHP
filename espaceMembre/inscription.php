<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Inscription</title>
        </head>
        <body align="center">
            <form method="post" action="inscription_post.php">
                <label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" required="required"><br />
                <label for="password">Mot de passe</label><input type="password" name="password" id="password" required="required"> <br/>
                <label for="passwordConfirm">Retapez votre mot de passe</label><input type="password" name="passwordConfirm" id="passwordConfirm" required="required"> <br/>
                <label for="email">Adresse email</label><input type="text" name="email" id="email" required="required"> <br/>
                <input type="submit" value="ENVOYER">
            </form>
        </body>
    </html>
</DOCTYPE>