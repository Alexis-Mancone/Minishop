<?php
require_once 'db.php';

echo '<script type="text/javascript">',
     'deleteAccount();',
     '</script>'
;

?>

<script>
        function deleteAccount() {
            
            if (confirm("Cliquez sur OK pour supprimer votre compte")){
                <?php
                $req = $bdd->prepare("DELETE FROM Account WHERE id_User = :id");
                $req->bindValue(':id', $_SESSION["ID"]);
                $req->execute();
                require_once 'php\\management\\logOut.php';
                ?>
            }
            else {
                <?php
                header('Location: ?p=profile');
                die;
                ?>
            }
            
        }
        
</script>