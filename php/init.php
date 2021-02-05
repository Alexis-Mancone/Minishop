<?php 
require_once "management/db.php";

session_start();

//The different status
$pages = ['admin','home','item','login','panier','profile','register'];
$del = ['logOut','delAccount'];
?>