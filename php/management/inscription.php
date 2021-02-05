<?php

require_once "../init.php";

function handleError($message) {
    $_SESSION['error_message'] = $message;
    header('Location: ../../'.'?p=register');
    die();
}
$url = parse_url($_SERVER['REQUEST_URI']);
parse_str($url["query"],$result);
var_dump($result);

$verif = $bdd->query('SELECT Nickname, Passwordacc, Mail FROM Account WHERE Nickname like "'.$result["nickname"].'"');
$resultDB = $verif->fetch(PDO::FETCH_ASSOC);

var_dump($resultDB);

if ($resultDB){
    echo 'Username aldready taken !';
    handleError("Username already taken.");
}else {
// Vérification de la validité des informations

// Hachage du mot de passe
    echo 'envoie des données';
    $pass_hache = password_hash($result['psw'], PASSWORD_DEFAULT);

// Insertion
    
    $req = $bdd->prepare('INSERT INTO Account (
        Nameacc, first_Name, Adress, Phone, Mail, Passwordacc, Sexe,  Date_creation, Nickname, _Admin
        ) VALUES(:name_acc, :first_name, :adress, :phone, :mail, :password_acc, :sexe, CURDATE(), :nickname, False)');
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