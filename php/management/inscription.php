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

?>