<?php

require_once "php/init.php";

var_dump($_SESSION);

if (strcmp($_SESSION["Pseudo"],"") == 0){
    $page = 'login';
}

if(isset($_POST['delete'])){
    $datadelet = $_POST['delete'];
    $req = $DB->query("DELETE FROM Account WHERE :id_User = id_User",array('id_User' => $datadelet));
    header('Location: ');
    $_SESSION['flash']['success'] = "Le compte à été supprimé";
    exit;
}
?>