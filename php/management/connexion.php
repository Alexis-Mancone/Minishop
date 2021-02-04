<?php

require_once "db.php";
require_once "../init.php";

function handleError($message) {
    $_SESSION['error_message'] = $message;
    header('Location: ../../'.'?p=login');
    die();
}

$url = parse_url($_SERVER['REQUEST_URI']);
parse_str($url["query"],$result);
var_dump($result);

//, WHERE A.Nickname = '.$result["nickname"]

//  Récupération du pseudo et de son mdp hashé
$req = $bdd->query('SELECT Nickname, Passwordacc, Mail FROM Account WHERE Nickname like "'.$result["nickname"].'"');
$resultDB = $req->fetch(PDO::FETCH_ASSOC);

var_dump($resultDB);

if (!$resultDB){
    echo 'Bad username !';
    handleError("Wrong Username");
}
else{
    // Comparaison du mdp envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($result['psw'], $resultDB['Passwordacc']);
    if ($isPasswordCorrect) {
        $_SESSION['Pseudo'] = $resultDB['Nickname'];
        $_SESSION['Email'] = $resultDB['Mail'];
        
        header('Location: ../../'.'?p=home');
        die();
    }
    else {
        echo 'Bad password !';
        handleError("Wrong Password");
    }
}

?>