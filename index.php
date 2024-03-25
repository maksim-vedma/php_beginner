<?php session_start(); ?>

<?php
// Initialisation des compteurs s' ils n'existent pas
if (!isset($_SESSION['compteurAccueil'])) {
    $_SESSION['compteurAccueil'] = 0;
    $_SESSION['compteurBlog'] = 0;
    $_SESSION['compteurContact'] = 0;
}

// Mise à jour du compteur "Accueil"
$_SESSION['compteurAccueil']++;
?>

<?php include './components/header.php' ?>
<?php include './components/carousel.php' ?>
<div class="container">
  <h1>Accueil</h1>
  <?php include './components/fruits.php' ?>
</div>
<?php include './components/footer.php' ?>
