<?php

function handleError($message) {
    $_SESSION['error_message'] = $message;
    header('Location: signup.php');
    die();
}

if (!isset($_POST['name'])) {
    handleError("empty Name");
}
if (!isset($_POST['firstname'])) {
    handleError("empty firstname");
}
if (!isset($_POST['adress'])) {
    handleError("empty adress");
}
if (!isset($_POST['phone'])) {
    handleError("empty phone number");
}
if (!isset($_POST['email'])) {
    handleError("empty email");
}
if (!isset($_POST['nickname'])) {
    handleError("empty username");
}
if (!isset($_POST['psw'])) {
    handleError("empty password");
}
 
// Vérification de la validité des informations

// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email));
?>

