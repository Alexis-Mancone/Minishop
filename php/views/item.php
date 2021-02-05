<?php
require_once "php/init.php";

$req = $bdd->query('SELECT * FROM Article WHERE id_Article = '.intval($_GET["id"]).' ');
$result = $req->fetchall(PDO::FETCH_ASSOC);
var_dump(intval($_GET["id"]));
var_dump($result);
?>
