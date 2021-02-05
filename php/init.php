<?php 
require_once "management/db.php";

session_start();

//The different status
$pages = ['admin','home','item','login','command','profile','register',"addProd"];
$del = ['logOut','delAccount'];
?>