<?php
require_once "php/init.php";

if (count($_SESSION) == 0){
    header("Location: "."?p=login");
    die;
}
?>
<!DOCTYPE html>
    <body>
      <form>
        <div id="container" class="container">
          <h1>Profil</h1>
          <hr>  
          <button type="submit" class="registerbtn" name="delete" value="logOut">Déconnexion</button>

          <button type="submit" class="registerbtn" <?php echo 
          "onClick=
            \"javascript: return confirm('Please confirm deletion');
            \" href='?delete=delAccount'"?>>Supprimer mon compte</button>
          <br>
          <button id="retour" type="submit" class="registerbtn" href='?p=home'>Retour</button>
        </div>
        <div class="buttonAdmin">
          <?php
          //onclick="window.location.
            if(strcmp($_SESSION['Admin'],'True')==0){
              echo '<button id="accessAdmin" type="submit" class="accessAdmin" name="p" value="admin">Admin</button>';
            }
          ?>
          </div>
      </form>
            
    </body>

</html>