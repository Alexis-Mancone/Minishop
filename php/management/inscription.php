<?php

function handleError($message) {
    $_SESSION['error_message'] = $message;
    header('Location: signup.php');
    die();
}

?>