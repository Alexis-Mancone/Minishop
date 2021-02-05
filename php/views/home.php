<!DOCTYPE html>

<?php require_once "php/init.php";?>
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
    <!-- navbar -->
    <div id="navbar" class="container-fluid">
                <nav class="navbar navbar-expand-sm">
                
                    <ul class="navbar-nav">
                    <li id="link1" class="nav-item">
                        <a id="menu" class="nav-link" href="?p=home">MINISHOP</a>
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
         <!-- menu -->
        <div class="container-fluid" id="body">
            <div class="row" id="body2">
                <!-- corps de la page -->
                    <div id="soldes2" class="row">
                        <?php
                            $req = $bdd->query("SELECT A.id_Article, A.Image From Article as A GROUP BY A.Type");
                            $result = $req->fetchall(PDO::FETCH_ASSOC);

                            for($i=0; $i<count($result); $i++){
                                echo '<div class="col-sm-3">
                                    <a href="?p=item&id='.$result[$i]["id_Article"].'">
                                    <img id="myImg" src="'.$result[$i]["Image"].'" alt="img" style="width:100%;max-width:300px"></a>
                                    <a class="add" href="addpanier.php?id=<?= $product ->id; ?>">Ajouter au panier</a>
                                    </div>';
                            }
                        ?>
                    </div>
            </div>
        </div>
    </body>
</html>