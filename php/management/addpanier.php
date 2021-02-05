<?php

require_once "php/init.php";

    //verif si id est envoyer 
    if(isset($_GET['id'])){
        $product = $bdd ->query('SELECT id FROM Article WHERE id_Article = :id', array('id'=> $_GET['id']));
        if(empty($product)){
            die("Ce produit n'existe pas");
        }
        $panier -> add($product[0]->id);
         die('Le produit a bien été ajouté à votre panier <a href="javascript:history.back()">retourner sur le catalogue</a>');
    }else{
        die("Vous n'avez pas sélectionné de produit à ajouter au panier");
    }

?>