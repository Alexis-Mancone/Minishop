<?php

function handleError($message) {
    $_SESSION['error_message'] = $message;
    header('Location: signup.php');
    die();
}

?>

<?php 

//  Récupération du pseudo et de son mdp hashé
$req = $bdd->prepare('SELECT A.Pseudo, A.Password, FROM Account as A WHERE Pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();

// Comparaison du mdp envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['Password'], $resultat['Password']);

if (!$resultat)
{
    echo 'Bad username or password !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['A.Pseudo'] = $resultat['A.Pseudo'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Bad username or password !';
    }
}

?>