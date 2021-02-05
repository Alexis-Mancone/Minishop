<!DOCTYPE html>


<head>
  <title>Connexion</title>
  <meta charset="utf-8">
  <?php require_once "php/init.php";?>
  <html lang="fr">
  <link rel="stylesheet" href="CSS/style.css">
  
</head>

  <body>

    <form action="php/management/connexion.php">
      <div id="container" class="container">
        <h1>Connexion</h1>
        <hr>

        <label class ="data" for="nickname"><b>Nickname</b></label>
        <input class ="inputData" type="text" placeholder="Enter Nickname" name="nickname" id="nickname" required>
        <hr>

        <label class ="data" for="psw"><b>Password</b></label>
        <input class ="inputData" type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <hr>
        <?php
        //If Error from the connexion.php, print the error  
          if (isset($_SESSION['error_message'])) {
        ?>
            <div class="error"><?php echo $_SESSION['error_message']; ?></div>
        <?php
            unset($_SESSION['error_message']);
          }
        ?>

        <input type="submit" class="registerbtn" value = "Connexion">
        <p>Don't Have a account ?<a href="?p=register">Sign in</a>.</p>
      </div>
    </form>
  </body>

</html>