<!DOCTYPE html>

<html lang="fr">
<head>
  <title>Connexion</title>
  <meta charset="utf-8">
  <style> <?php include 'css\\style.css' ?> </style>
  
</head>

  <body>
    <?php 
      if (isset($_SESSION['error_message'])) {
    ?>
        <div><?php echo $_SESSION['error_message']; ?></div>
    <?php
        unset($_SESSION['error_message']);
      }
    ?>
    <form action="../management/connexion.php">
      <div class="container">
        <h1>Connexion</h1>
        <hr>

        <label for="pseudo"><b>Pseudo</b></label>
        <input type="text" placeholder="Enter Pseudo" name="pseudo" id="pseudo" required>
        <hr>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <hr>

        <button type="submit" class="registerbtn">Connexion</button>
        <p>Already have an account? <a href="?p=register">Sign in</a>.</p>
      </div>
    </form>
  </body>

</html>