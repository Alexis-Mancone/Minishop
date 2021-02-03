<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8"/>

<style> <?php include 'css\\style.css' ?> </style>

<title>Minishop</title>

<head>
    <!--head avec barre de recherche, bouton de panier et de profil-->
    <div class="navigation">
        <h1>Minishop</h1>
        <input type="search" class="site-search" name="q" aria-label="Search through site content">
        <button class="searchButton">Search</button>
        <button class="chooseWindow" type="button" onclick="window.location.href = ''">Panier</button>
        <button class="chooseWindow" type="button" onclick="window.location.href = ''">Profil</button>
    </div>
</head>

<body>
    <div class="menu">
        <h1 class="catégorie">Catégories</h1>
        <!--Menu sur le côté gauche pour choisir la catégorie-->
        <button class="catégorie" id="catégorie 1">catégorie 1</button>
        <button class="catégorie" id="catégorie 2">catégorie 2</button>
        <button class="catégorie" id="catégorie 3">catégorie 3</button>
        <button class="catégorie" id="catégorie 4">catégorie 4</button>
        <button class="catégorie" id="catégorie 5">catégorie 5</button>
    </div>

    <div class="screen">
        <!--code pour div central-->
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
    </div>
</body>
</html>