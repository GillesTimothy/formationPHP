<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon site </title> 
    </head>
    <body>
        <p>
            <?php
            if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter'])) {

                $nbrRepetition = (int) $_GET['repeter'];
                if($nbrRepetition <100 && $nbrRepetition >= 1){
                    for($repetition=1; $repetition<=$nbrRepetition; $repetition++) {

                        echo '<p> bonjour, très cher ' . $_GET['nom'] . ' ' . $_GET['prenom'] . '</p>';

                    }
                }
                else if ($nbrRepetition == 0) {
                    echo 'veillez renseigner un nbr de repetition valide !';
                }
                else { echo 'le nombre de répetition est trop grand ! nbrRepetition = ' . $_GET['repeter']; }
            }

            else {
                echo 'pas de nom ou prenom défini ou de repetition !';
            }
            
            ?>
        </p>
    </body>
</html>    