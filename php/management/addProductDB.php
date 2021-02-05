<?php

require_once "../init.php";

//Print an error when a value is not correct
function handleError($message) {
    $_SESSION['error_message'] = $message;
    header('Location: ../../'.'?p=register');
    die();
}

$url = parse_url($_SERVER['REQUEST_URI']);
parse_str($url["query"],$result);
var_dump($result);
/*
$verif = $bdd->query('SELECT Nickname, Passwordacc, Mail FROM Article WHERE Nickname like "'.$result["nickname"].'"');
$resultDB = $verif->fetch(PDO::FETCH_ASSOC);

var_dump($resultDB);
*/
$resultDB = False;
if ($resultDB){
    echo 'Username aldready taken !';
    handleError("Username already taken.");
}else {
// Insertion 
    $req = $bdd->prepare('INSERT INTO Account (
        Type, Size, Color, Price, Description, Image
        ) VALUES(:type, :size, :color, :price, :desc, :image)');
    $req->bindValue(':type' , $result["type"]);
    $req->bindValue(':size' , $result["size"]);
    $req->bindValue(':color' , $result["color"]);
    $req->bindValue(':price' , $result["price"]);
    $req->bindValue(':desc' , $result["desc"]);
    $req->bindValue(':image' , $result['image']);

    $req->execute();

    echo "envoie réussi";
    header('Location: ../../'.'?p=admin');
    die;
}
?>