<?php

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
if (isset($_GET['delete'])){
    if (in_array($_GET['delete'],$del)){
        require_once 'php\\management\\'.$_GET['delete'].'.php';
    }
}

require_once 'php\\views\\' . $page . '.php';

?>