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

if (strcmp(($result['firstname']),"") == 0) {
    handleError("empty firstname");
}else if (strcmp(($result['name']),"") == 0) {
    handleError("empty name");
}else if (strcmp(($result['adress']),"") == 0) {
    handleError("empty adress");
}else if (strcmp(($result['phone']),"") == 0) {
    handleError("empty phone number");
}else if (strcmp(($result['email']),"") == 0) {
    handleError("empty email");
}else if (strcmp(($result['nickname']),"") == 0) {
    handleError("empty username");
}else if (strcmp(($result['psw']),"") == 0) {
    handleError("empty password");
}else {
// Vérification de la validité des informations

// Hachage du mot de passe
    echo 'envoie des données';
    $pass_hache = password_hash($result['psw'], PASSWORD_DEFAULT);

// Insertion
    
    $req = $bdd->prepare('INSERT INTO Account (
        id_User, Nameacc, first_Name, Adress, Phone, Mail, Passwordacc, Sexe,  Date_creation, Nickname
        ) VALUES(:id_user, :name_acc, :first_name, :adress, :phone, :mail, :password_acc, :sexe, CURDATE(), :nickname)');
    $req->bindValue(':id_user' , 1); //Nombre à changer !!!!!!
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
}
?>