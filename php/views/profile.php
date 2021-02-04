<?php

require_once "php/init.php";

var_dump($_SESSION);

if (strcmp($_SESSION["Pseudo"],"") == 0){
    $page = 'login';
}
?>