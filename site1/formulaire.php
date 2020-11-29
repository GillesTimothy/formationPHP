<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon site </title> 
    </head>
    <body>
        <form method="post" action="cible.php">
        
            <p><label> Prenom : <input type="text" name="prenom"/></label></p>
            <p><label> Etes vous vegetarien : <input type="checkbox" name="vege" /></label></p>
            <p><textarea name="message" rows="8" cols="45">
                Votre message ici.
            </textarea></p>
            <p><select name="choix">
                <option value="choix1">Choix 1</option>
                <option value="choix2">Choix 2</option>
                <option value="choix3" selected="selected">Choix 3</option>
                <option value="choix4">Choix 4</option>
            </select></p>
            <p>Aimez-vous les frites ?
                <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
                    <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label></p>

            <p><input type="submit" /></p>
            <p><input type="hidden" name="pseudo" value="Mateo21" /></p>
            </form>

            
            <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
                <p>
                    Formulaire d'envoi de fichier :<br />
                    <input type="file" name="monfichier" /><br />
                    <input type="submit" value="Envoyer le fichier" />
                </p>            
             </form>
    
        
    </body>
</html>    