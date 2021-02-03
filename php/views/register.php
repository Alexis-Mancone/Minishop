<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>inscription</title>
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

<form action="../management/inscription.php" method='get'>
  <div class="container">
    <h1>Inscription</h1>
    <p>Merci de vous enregistrer pour vous connecter</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" id="name" required>
    <hr>

    <label for="Firstname"><b>Firstname</b></label>
    <input type="text" placeholder="Firstname" name="firstname" id="firstname" required>
    <hr>

    <label for="adress"><b>Adress</b></label>
    <input type="text" placeholder="Adress" name="adress" id="adress" required>
    <hr>

    <label for="phone"><b>Phone number</b></label>
    <input type="text" placeholder="Phone number" name="phone" id="phone" required>
    <hr>
    
    <label for="sex"><b>Sex</b></label>
    <input type="text" placeholder="Man/Woman" name="sex" id="sex" required>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" id="email" required>
    <hr>

    <label for="nickname"><b>Username</b></label>
    <input type="text" placeholder="Username" name="nickname" id="nickname" required>
    <hr>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" name="psw" id="psw" required>
    <hr>
    
    <input type="submit" class="registerbtn" value = "Inscription">
    <p>Vous n'avez pas de compte? <a href="?p=login">Connexion</a>.</p>
  </div>
</form>

</body>
</html>




<!-- deconnexion -->
<?php 
/*session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');*/
?>