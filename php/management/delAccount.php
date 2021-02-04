<?php
require_once 'db.php';

$req = $bdd->prepare("DELETE FROM Account WHERE id_User = :id");
$req->bindValue(':id', $_SESSION["ID"]);
$req->execute();

require_once 'php\\management\\logOut.php';
?>