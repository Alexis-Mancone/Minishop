<?php

//verif session existe 
if(!isset($_SESSION)){
    session_start();
}
//creation panier vide
if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
}

?>