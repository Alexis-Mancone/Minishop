<?php
    //verif si id est envoyer 
    if(isset($_GET['id'])){
        $poduct = $DB ->query('SELECT id FROM Article WHERE id_Article = :id', array('id'=> $_GET['id']));
        if(empty($product)){
            die("Ce produit n'existe pas");
        }
    }else{
        die("Vous n'avez pas sélectionné de produit à ajouter au panier");
    }

?>