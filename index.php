<?php
/*
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'acceuil_connexion.php';
header("Location: http://$host$uri/$extra");
die;
*/
// check auth

require_once "php\\init.php";

$page = 'home';
if (isset($_GET['p'])) {
    echo "HOI";
    if (in_array($_GET['p'],$pages)){
        $page = $_GET['p'];
    }
    else {
        $page = '404';
    }
}

require_once 'php\\views\\' . $page . '.php';

?>