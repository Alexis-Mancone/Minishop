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
        <div class="navigation">
            <h1>Minishop</h1>
            <input type="search" class="site-search" name="q" aria-label="Search through site content">
            <button class="searchButton">Search</button>
            <button class="chooseWindow" type="button" onclick="window.location.href = '?p=panier'">Panier</button>
            <button class="chooseWindow" type="button" onclick="window.location.href = '?p=profile'">Profil</button>
        </div>
    </header>
    <div class="adminPannel">
        <button class="adminbtn" id="ajout">Ajout</button>
        <button class="adminbtn" id="modification">Modification</button>
        <button class="adminbtn" id="suppression">Suppression</button>
    </div>
    <div class="menu">
        <h1 class="catégorie">Catégories</h1>
        <!--Menu sur le côté gauche pour choisir la catégorie-->
        <button class="catégorie" id="catégorie 1">catégorie 1</button>
        <button class="catégorie" id="catégorie 2">catégorie 2</button>
        <button class="catégorie" id="catégorie 3">catégorie 3</button>
        <button class="catégorie" id="catégorie 4">catégorie 4</button>
        <button class="catégorie" id="catégorie 5">catégorie 5</button>
    </div>
   
    <div class="adminScreen">
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
