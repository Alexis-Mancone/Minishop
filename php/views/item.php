<?php
require_once "php/init.php";

$req = $bdd->prepare("SELECT * FROM Article as A WHERE A.id_Article = '".$_GET["id"]."'");
$result = $req->fetch(PDO::FETCH_ASSOC);
?>
