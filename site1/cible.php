<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon site </title> 
    </head>
    <body>
        <p> 
            
            <?php echo 'bonjour, ' . htmlspecialchars($_POST['prenom']); //valeur du name dans POST  ?>  </p>
        <p>    <?php if(isset($_POST['vege'])) {
                echo 'vous etes donc vegetarien.';
            }
            else { echo 'vous n\'etes pas vegetarien.'; } ?> </p>
        <p>
            <?php echo htmlspecialchars($_POST['message']); ?>  
        </p>
        <p>
            <?php echo htmlspecialchars($_POST['choix']); ?>  
        </p>
        <p>
            <?php echo 'est ce que j\'aime les frites : ' . htmlspecialchars($_POST['frites']); ?>  
        </p>
        
    </body>
</html>    