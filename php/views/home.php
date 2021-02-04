<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8"/>
<?php require_once "php/init.php";?>
<style> <?php include 'css\\style.css' ?> </style>
<style> <?php include 'css\\bootstrap.css' ?> </style>
<title>Minishop</title>

<head>
    <!-- navbar -->
    <div id="navbar" class="container-fluid">
        <nav class="navbar navbar-expand-sm">
            <ul class="navbar-nav">
                <li id="link1" class="nav-item">
                    <a  class="nav-link" href="#">MINISHOP</a>
                </li>
                <li id="link2" class="nav-item">
                    <a   class="nav-link" onclick="window.location.href = '?p=profile'">Profil</a>
                </li>
                <li id="link4" class="nav-item">
                    <a  class="nav-link" onclick="window.location.href = '?p=panier'">Panier</a>
                </li>
            </ul>
        </nav>
    </div>
    <!--head avec barre de recherche, bouton de panier et de profil-->
    <!-- <div class="navigation">
        <h1>Minishop</h1>
        <input type="search" class="site-search" name="q" aria-label="Search through site content">
        <button class="searchButton">Search</button>
        <button class="chooseWindow" type="button" onclick="window.location.href = '?p=panier'">Panier</button>
        <button class="chooseWindow" type="button" onclick="window.location.href = '?p=profile'">Profil</button>
    </div> -->
</head>

<body>
     <!-- menu -->
     <div class="container">
            <div class="row">
                <div id="menu" class="col-sm-2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="#">Pulls</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">T-shirt</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Accessoires</a>
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


    <!-- <div class="menu">
        <h1 class="catégorie">Catégories</h1>
        Menu sur le côté gauche pour choisir la catégorie
        <button class="catégorie" id="catégorie 1">catégorie 1</button>
        <button class="catégorie" id="catégorie 2">catégorie 2</button>
        <button class="catégorie" id="catégorie 3">catégorie 3</button>
        <button class="catégorie" id="catégorie 4">catégorie 4</button>
        <button class="catégorie" id="catégorie 5">catégorie 5</button>
    </div>

    <div class="screen">
        code pour div central
        <object id="box">
            <blockquote>
                nom du produit<br><br>
                prix €
            </blockquote>
        </object>
        <object id="box">
            <blockquote>
                nom du produit<br><br>
                prix €
            </blockquote>
        </object>
        <object id="box">
            <blockquote>
                nom du produit<br><br>
                prix €
            </blockquote>
        </object>
    </div> -->
</body>
</html>