<?php
/*<style> <?php include 'css\\bootstrap.min.css' ?> </style>*/
// check auth

require_once "php\\init.php";

$page = 'home';
if (isset($_GET['p'])) {
    if (in_array($_GET['p'],$pages)){
        $page = $_GET['p'];
    }
    else {
        $page = '404';
    }
}

require_once 'php\\views\\' . $page . '.php';

?>