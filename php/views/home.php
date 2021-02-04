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
        <div class="container">
            <div class="row">
                <div id="menu2" class="col-sm-2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a id="menu3" class="nav-link" href="#">Pulls</a>
                        </li>
                        <li class="nav-item">
                        <a id="menu3" class="nav-link" href="#">T-shirt</a>
                        </li>
                        <li class="nav-item">
                        <a id="menu3" class="nav-link" href="#">Accessoires</a>
                        </li>
                    </ul>
                </div>

                <!-- corps de la page -->
                <div id="corps" class="col-sm-9">
                    <div id="soldes2" class="row">
                        <div id="pourcent" class="col-sm-4">- 20%</div>
                        <div id="pourcent" class="col-sm-3">- 40%</div>
                        <div id="pourcent" class="col-sm-4">- 50%</div>
                    </div>
                    <div id="soldes" class="row">
                        <div class="col-sm-4">SOLDES</div>
                        <div class="col-sm-4">SOLDES</div>
                        <div class="col-sm-4">SOLDES</div>
                    </div>
                    <div id="soldes2" class="row">
                        <div id="pourcent" class="col-sm-4">- 20%</div>
                        <div id="pourcent" class="col-sm-3">- 40%</div>
                        <div id="pourcent" class="col-sm-4">- 50%</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>