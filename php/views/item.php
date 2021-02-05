<?php
require_once "php/init.php";

$req = $bdd->query('SELECT * FROM Article WHERE id_Article = '.intval($_GET["id"]).' ');
$result = $req->fetch(PDO::FETCH_ASSOC);
//var_dump($result);
/*<?php
        echo "<img id='imgArticle' src='".$result["Image"]."' alt='img' style='width:100%;max-width:300px'>
                <div class='articleInfo'>
                <!--code pour div central-->
                    <object id='box'>
                        <blockquote>
                            ".$result["Type"]." <br>Taille 
                            ".$result["Size"]." <br>
                            ".$result["Color"]."<br>
                            ".$result["Description"]." <br>
                            ".$result["Price"]." €
                        </blockquote>
                    </object>
                </div>";
    ?>*/
?>
<!DOCTYPE html>
<head>
    <html lang="fr">
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css"> 
    <title>Minishop</title>
</head>

<body>
    <header>
        <!--head avec barre de recherche, bouton de panier et de profil-->
        <div id="navbar" class="container-fluid">
            <nav class="navbar navbar-expand-sm">
        
                <ul class="navbar-nav">
                    <li id="link1" class="nav-item">
                        <a id="menu" class="nav-link" href="#">MINISHOP</a>
                    </li>
                    <li id="link2" class="nav-item">
                        <a id="menu" class="nav-link" onclick="window.location.href = '?p=profile'">Profil</a>
                    </li>
                    <li id="link4" class="nav-item">
                        <a id="menu" class="nav-link" onclick="window.location.href = '?p=panier'">Panier</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container row">
        <div class="col-sm-3">
            <img id="imgArticle" src="https://img01.ztat.net/article/spp-media-p1/a1be8042676d335c8a20726df3bef189/d12ebe09efa04f04b031bcf9f47fd4ce.jpg?imwidth=1800" alt="img" style="width:100%;max-width:300px">
        </div>
        <div class="col-sm-8"id="articleInfo">
        <!--code pour div central-->
                <blockquote>
                    Type :
                    <br><br>
                    Size :
                    <br><br>
                    Color : 
                    <br><br>
                    Description : 
                    <br><br>
                    Price : €
                </blockquote>
        </div>
    </div>
    
</body>

