<?php
// On rend la session disponible
session_start();

// On regarde si on nous a envoyé un "username" depuis un formulaire
if (isset($_POST['username'])) {
    // On créé une session pour cet utilisateur
    $_SESSION['user'] = htmlspecialchars($_POST['username']);
}

// Une fois qu'on a fini, on redirige sur la page "login"
// Pour ne pas laisser l'utilisateur sur une page blanche sans html
header('Location: /login.php');
