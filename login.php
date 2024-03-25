<?php session_start(); ?>

<?php include './components/header.php'; ?>
    <div class="container">
      <h1>Connexion</h1>

      <?php if (isset($_SESSION['user'])): ?>
        <?php if ($_SESSION['user'] === 'admin'): ?>
          <div class="alert alert-info" role="alert">
            Bienvenue administrateur tout puissant !!
          </div>
        <?php else: ?>
          <div class="alert alert-success" role="alert">
            Vous êtes connecté en tant que <?= $_SESSION['user'] ?> !!
          </div>
        <?php endif ?>
      <?php else: ?>
        <?php include './components/login-form.php' ?>
      <?php endif ?>
    </div>
<?php include './components/footer.php' ?>
