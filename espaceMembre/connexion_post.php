<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=testOC;charset=utf8', 'root', '');
}
catch(Exception $e){
    die('ERREUR : ' . $e->getMessage());
}


//On récupère le mot de passe de l'utilisateur qui tente de se connecter
$req=$bdd->query("SELECT id, pass, pseudo FROM membres WHERE pseudo = '" . $_POST['pseudo'] . "'");
if($req->rowCount() != 0){
    $row = $req->fetch();
    $isPasswordCorrect = password_verify($_POST['password'], $row['pass']);
    //Verifie si le password correspond bien à celui de la db
    if($isPasswordCorrect){
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['pseudo'] = $row['pseudo'];
        echo 'Vous êtes connecté !';
    }
    else{
        echo'mot de passe incorrect ! ';
    }
}
//Si pseudo incorrect et pas trouvé dans la requête
else{
    echo 'Pseudo incorrecte ! ';
}

header('Location: http://localhost/formationPHP/espaceMembre/index.php');