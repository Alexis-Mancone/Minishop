<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>inscription</title>
  <style> <?php include 'css\\style.css' ?> </style>
</head>

<body>
<form action="/inscription.php">
  <div class="container">
    <h1>Inscription</h1>
    <p>Merci de vous enregistrer pour vous connecter</p>
    <hr>

    <label for="nom"><b>Nom</b></label>
    <input type="text" placeholder="Enter Nom" name="nom" id="nom" required>
    <hr>

    <label for="prénom"><b>Prénom</b></label>
    <input type="text" placeholder="Enter Prénom" name="prénom" id="prénom" required>
    <hr>

    <label for="adresse"><b>Adresse</b></label>
    <input type="text" placeholder="Enter Adresse" name="adresse" id="adresse" required>
    <hr>

    <label for="téléphone"><b>Téléphone</b></label>
    <input type="text" placeholder="Enter Téléphone" name="téléphone" id="téléphone" required>
    <hr>
    
    <label for="sexe"><b>Sexe</b></label>
    <input type="text" placeholder="Enter Sexe" name="sexe" id="sexe" required>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <hr>
    <label for="pseudo"><b>Pseudo</b></label>
    <input type="text" placeholder="Enter Pseudo" name="pseudo" id="pseudo" required>
    <hr>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <hr>
    <button type="submit" class="registerbtn">Inscription</button>
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