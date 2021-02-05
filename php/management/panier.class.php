<?php

class panier{

    public function __construct(){
        //verif session existe 
        if(!isset($_SESSION)){
            session_start();
        }
        //creation panier vide
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
    }

    public function add($product_id){
        $_SESSION['panier'][$product_id] = 1 ; 
    }
}
?>