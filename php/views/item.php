<?php
require_once "php/init.php";

$req = $bdd->query('SELECT * FROM Article WHERE id_Article = '.intval($_GET["id"]).' ');
$result = $req->fetch(PDO::FETCH_ASSOC);
//var_dump($result);
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="CSS/style2.css">
</head>

<body>
    <?php
        echo "<img id='imgArticle' src='".$result["Image"]."' alt='img' style='width:100%;max-width:300px'>
                <div class='articleInfo'>
                <!--code pour div central-->
                    <object id='box'>
                        <blockquote>
                            ".$result["Type"]." <br>Taille 
                            ".$result["Size"]." <br>
                            ".$result["Color"]."<br>
                            ".$result["Description"]." <br>
                            ".$result["Price"]." €
                        </blockquote>
                    </object>
                </div>";
    ?>
</body>

