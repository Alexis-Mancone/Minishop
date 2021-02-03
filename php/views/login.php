<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap.min.css">


<html lang="fr">

  <head>
    <title>Connexion</title>
    <script src=".js"></script>
  </head>
    <body>
      <form action="/inscription.php">
        <div class="container">
          <h1>Connexion</h1>
        
          <hr>

          <label for="pseudo"><b>Pseudo</b></label>
          <input type="text" placeholder="Enter Pseudo" name="pseudo" id="pseudo" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

          <hr>

          <button type="submit" class="registerbtn">Connexion</button>
          </div>
      
          <div class="container signin">
          <p>Already have an account? <a href="acceuil_inscription.php">Sign in</a>.</p>
        </div>
      </form>
    </body>

</html>