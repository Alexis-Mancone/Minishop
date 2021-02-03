<?php
/*
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'acceuil_connexion.php';
header("Location: http://$host$uri/$extra");
die;
*/
require_once "php\\init.php";

// check auth

$page = 'home';
$url = parse_url($_SERVER["QUERY_STRING"]);
var_dump($url);
if (isset($_GET['p'])) {
    echo "HOI";
    if (in_array($_GET['p'], $pages)) {
        $page = $_GET['p'];
    }
    else {
        $page = '404';
    }
}

require_once 'php\\views\\' . $page . '.php';

?>