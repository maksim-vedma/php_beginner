<?php
// On rend la session disponible
session_start();

// On la vide
$_SESSION = [];

// On la détruit
session_destroy();

// On redirige sur la page de notre choix
header('Location: /login.php');
