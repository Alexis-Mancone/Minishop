<!DOCTYPE html>

<?php require_once "php/init.php";?>

<body>

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