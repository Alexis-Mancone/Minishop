<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Shop</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
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
    <p>Already have an account? <a href="acceuilConnexion.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>