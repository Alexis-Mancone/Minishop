<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8"/>
<?php require_once "php/init.php";?>
<style> <?php include 'css\\style.css' ?> </style>
<style> <?php include 'css\\bootstrap.min.css' ?> </style>


<title>Minishop</title>

<head>
    <!--head avec barre de recherche, bouton de panier et de profil-->
    <!-- navbar -->
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
</head>

<body>
         <!-- menu -->
        <div class="container-fluid" id="body">
            <div class="row" id="body2">
                <!-- corps de la page -->
                    <div id="soldes2" class="row">
                        <?php
                            $req = $bdd->query("SELECT A.Image From Article as A GROUP BY A.Type");
                            $result = $req->fetchall(PDO::FETCH_ASSOC);

                            for($i=0; $i<count($result); $i++){
                                echo '<div class="col-sm-3">
                                    <img id="myImg" src="'.$result[$i]["Image"].'" alt="Snow" style="width:100%;max-width:300px">
                                    </div>';
                            }
                        ?>
                    </div>
                    
            </div>
        </div>
    </body>
</html>