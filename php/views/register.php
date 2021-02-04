<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>inscription</title>
  <style> <?php include 'css\\style.css' ?> </style>
</head>

<body>

<form action= "php/management/inscription.php">
  <div class="container">
    <h1>Inscription</h1>
    <p>Merci de vous enregistrer pour vous connecter</p>
    <hr>

    <label class ="data" for="name"><b>Name</b></label>
    <input class ="inputData" type="text" placeholder="Name" name="name" id="name" required>
    <hr>

    <label class ="data" for="firstname"><b>Firstname</b></label>
    <input class ="inputData" type="text" placeholder="Firstname" name="firstname" id="firstname" required>
    <hr>

    <label class ="data" for="adress"><b>Adress</b></label>
    <input class ="inputData" type="text" placeholder="Adress" name="adress" id="adress" required>
    <hr>

    <label class ="data" for="phone"><b>Phone number</b></label>
    <input class ="inputData" type="text" placeholder="Phone number" name="phone" id="phone" required>
    <hr>
    
    <label class ="data" for="sex"><b>Sex</b></label>
    <input class ="inputData" type="text" placeholder="Man/Woman" name="sex" id="sex" required>
    <hr>

    <label class ="data" for="email"><b>Email</b></label>
    <input class ="inputData" type="text" placeholder="Email" name="email" id="email" required>
    <hr>

    <label class ="data" for="nickname"><b>Username</b></label>
    <input class ="inputData" type="text" placeholder="Username" name="nickname" id="nickname" required>
    <hr>

    <label class ="data" for="psw"><b>Password</b></label>
    <input class ="inputData" type="password" placeholder="Password" name="psw" id="psw" required>
    <hr>

    <?php 
    if (isset($_SESSION['error_message'])) {
    ?>
      <div class="error" ><?php echo $_SESSION['error_message']; ?></div>
    <?php
      unset($_SESSION['error_message']);
    }
    ?>
    
    <input type="submit" class="registerbtn" value = "Inscription">
    <p>Vous n'avez pas de compte? <a href="?p=login">Connexion</a>.</p>
  </div>
</form>

</body>
</html>