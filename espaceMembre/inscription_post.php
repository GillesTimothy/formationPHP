<?php


    try {
        $bdd = new PDO('mysql:host=localhost;dbname=testOC;charset=utf8', 'root', '');
    }
    catch(Exception $e){
        die('ERREUR : ' . $e->getMessage());
    }

    //On récup les pseudo pour voir si ils sont dans la table
    $req=$bdd->query("SELECT pseudo from membres WHERE pseudo = '". $_POST['pseudo'] . "'");
    var_dump($req);
    $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //On vérifie que la requete n'a pas de tuple, si > 0 il y a quelque chose sinon non.
        if ($req->rowCount() != 0) {
            echo 'pseudo incorrect ! ';
        }
        elseif($_POST['password'] != $_POST['passwordConfirm']){
            echo 'les mots de passe ne sont pas identiques !';
        }

        else {
            $req = $bdd->prepare('INSERT INTO membres (pseudo,pass,email,date_inscription) VALUES (?,?,?,CURDATE())');

            $req->execute(array(
                $_POST['pseudo'],
                $pass_hash,
                $_POST['email']
            ));
            echo 'Le compte a bien été enregistré dans la BDD';
        }


    $req->closeCursor();

    header('Location: http://localhost/formationPHP/espaceMembre/index.php');

?>