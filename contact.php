<?php session_start(); ?>
<?php $_SESSION['compteurContact']++; ?>

<?php
$firstname = null;
$lastname = null;
$email = null;
$job = null;
$message = null;

if (isset($_POST['firstname'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $job = htmlspecialchars($_POST['job']);
    $message = htmlspecialchars($_POST['message']);
}
?>


<?php include './components/header.php'; ?>
    <div class="container">
      <h1>Contactez-nous</h1>
      <?php if ($firstname): ?>
        <p>Vous vous appelez <?= $lastname ?> <?= $firstname ?></p>
        <p>Vous êtes : <?= $job ?></p>
        <p>Votre adresse email: <?= $email ?></p>
        <p>Votre message: <?= $message ?></p>
      <?php endif ?> 

      <?php include './components/contact-form.php'; ?>
    </div>
<?php include './components/footer.php' ?>

