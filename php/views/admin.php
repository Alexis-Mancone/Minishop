<!DOCTYPE html>

<head>
    <html lang="fr">
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Admin Pannel</title>
</head>

<body> 
    <header>
        <!--head avec barre de recherche, bouton de panier et de profil-->
        <div class="navigation">
            <button class="chooseWindow" type="button" onclick="window.location.href = '?p=home'"><-- Retour</button>
        </div>
    </header>
    <div class="adminPannel">
        <button class="adminbtn" id="ajout" type="button" onclick="window.location.href='?p=addProd'">Ajout</button>
        <button class="adminbtn" id="modification">Modification</button>
    </div>

   
    <div class="adminScreen row">
        <br>
        <!--code pour div central-->
                <?php
                    $req = $bdd->query("SELECT * From Article as A Order by A.Type");
                    $result = $req->fetchall(PDO::FETCH_ASSOC);

                    for($i=0; $i<count($result); $i++){
                        echo '<div class="col-sm-3">
                            
                            <p> 
                            <a href="?p=item&id='.$result[$i]["id_Article"].'"> '.$result[$i]["Type"]." - ".$result[$i]["Size"]." - ".$result[$i]["Price"].' € </a>
                            <a href="?delete=currentObject&id='.$i.'">Delete</a>
                            </p>
                            </div>';
                    }
                ?>
    </div>
    
</body>
</html>
