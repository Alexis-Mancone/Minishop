<?php

require_once "php/init.php";

var_dump($_SESSION);

if (count($_SESSION) == 0){
    echo "oui";
    header("Location: "."?p=login");
    die;
}
?>
<!DOCTYPE html>
<meta charset="utf-8">
<style> <?php include 'css\\style.css' ?> </style>
<html lang="fr">

  <head>
    <title>Profil</title>
  </head>
    <body>
      <form>
        <div class="container">
          <h1>Profil</h1>

          <hr>
         
          <button type="submit" class="registerbtn" name="delete" value="logOut">Déconnexion</button>

          <button type="submit" class="registerbtn" name="delete" value="delAccount" onclick="deleteAccount()">Supprimer mon compte</button>
          <br>
          <button id="retour" type="submit" class="registerbtn" onclick="window.location.href = '?p=home'">Retour</button>

        </div>
      </form>
      <script>
        function deleteAccount() {
          alert("Cliquez sur OK pour supprimer votre compte");
        }
      </script>
            
    </body>

</html>