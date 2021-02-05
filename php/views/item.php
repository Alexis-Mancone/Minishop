<?php
require_once "php/init.php";

$req = $bdd->query('SELECT * FROM Article WHERE id_Article = '.intval($_GET["id"]).' ');
$result = $req->fetch(PDO::FETCH_ASSOC);
//var_dump($result);
?>
<!DOCTYPE html>
<head>
    <html lang="fr">
    <meta charset="utf-8"/>
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
    <?php
        echo '<img id="imgArticle" src="'.$result["Image"].'" alt="img" style="width:100%;max-width:300px">
                <div class="aricleInfo">
                <!--code pour div central-->
                    <object id="box">
                        <blockquote>
                            '.$result["Type"].' Taille
                            '.$result["Size"].'
                            '.$result["Color"].'<br>
                            '.$result["Description"].' <br>
                            '.$result["Price"].' €
                        </blockquote>
                    </object>
                </div>';
    ?>

</body>

