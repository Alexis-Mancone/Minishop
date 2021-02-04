<?php

require_once "db.php";
require_once "../init.php";

function handleError($message) {
    $_SESSION['error_message'] = $message;
    header('Location: ../../'.'?p=register');
    die();
}
$url = parse_url($_SERVER['REQUEST_URI']);
parse_str($url["query"],$result);
var_dump($result);

if (strcmp(($result['psw']),"") == 0) {
    handleError("empty password");
}else {
// Vérification de la validité des informations

// Hachage du mot de passe
    echo 'envoie des données';
    $pass_hache = password_hash($result['psw'], PASSWORD_DEFAULT);

// Insertion
    
    $req = $bdd->prepare('INSERT INTO Account (
        Nameacc, first_Name, Adress, Phone, Mail, Passwordacc, Sexe,  Date_creation, Nickname
        ) VALUES(:name_acc, :first_name, :adress, :phone, :mail, :password_acc, :sexe, CURDATE(), :nickname)');
    $req->bindValue(':name_acc' , $result["name"]);
    $req->bindValue(':first_name' , $result["firstname"]);
    $req->bindValue(':adress' , $result["adress"]);
    $req->bindValue(':phone' , $result["phone"]);
    $req->bindValue(':mail' , $result['email']);
    $req->bindValue(':sexe' , $result['sex']);
    $req->bindValue(':nickname' , $result['nickname']);
    $req->bindValue(':password_acc' , $pass_hache);
   
    $req->execute();

    echo "envoie réussi";
    header('Location: ../../'.'?p=login');
    die;

?>