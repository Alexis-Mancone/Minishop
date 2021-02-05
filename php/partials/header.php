<?php
function partials_header($page) {
?>
<!DOCTYPE html>
<head>
    <html lang="fr">
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title><?php echo ucfirst($page); ?></title>
</head>
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
</body>
</html>

<?php
}
?>