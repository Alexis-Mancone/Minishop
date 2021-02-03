<?php

require_once "db.php";
require_once "../init.php"

function handleError($message) {
    $_SESSION['error_message'] = $message;
    header('Location: register.php');
    die();
}

if (!isset($_POST['name'])) {
    handleError("empty Name");
}
else if (!isset($_POST['firstname'])) {
    handleError("empty firstname");
}
else if (!isset($_POST['adress'])) {
    handleError("empty adress");
}
else if (!isset($_POST['phone'])) {
    handleError("empty phone number");
}
else if (!isset($_POST['email'])) {
    handleError("empty email");
}
else if (!isset($_POST['nickname'])) {
    handleError("empty username");
}
else if (!isset($_POST['psw'])) {
    handleError("empty password");
}
else {
// Vérification de la validité des informations

// Hachage du mot de passe
    $pass_hache = password_hash($_POST['psw'], PASSWORD_DEFAULT);

// Insertion
    $req = $bdd->prepare('INSERT INTO Account(
        id_User, Nameacc, first_Name, Adress, Phone, Mail, Passwordacc, Sexe,  Date_creation, Nickname
        ) VALUES(:id_user, :name_acc, :first_name, :adress, :phone, :mail, :password_acc, :sexe, CURDATE(), :nickname)');
    $req->bindValue(
        ':name_acc' => $_POST["name"],
        ':first_name' => $_POST["firstname"],
        ':adress' => $_POST["adress"],
        ':phone' => $_POST["phone"],
        ':mail' => $_POST['email'],
        ':sexe' => $_POST['sex'],
        ':nickname' => $_POST['nickname'],
        ':password_acc' => $pass_hache);
    $req->fetchAll();

    header('Location: '. __DIR__ .'\\php\\views\\login.php');
}
 
?>