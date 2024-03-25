<?php session_start(); ?>
<?php $_SESSION['compteurBlog']++; ?>
<?php
require_once './articles.php';

// Filtrer les résultats si le formulaire de recherche a été soumis
if (isset($_GET['search'])) {
    $articles = array_filter($articles, function ($article) {
        return str_contains(strtolower($article['title']), strtolower($_GET['search']));
    });
}

?>

<?php include './components/header.php'; ?>
    <div class="container">
      <h1>Blog</h1>
      <?php if (isset($_GET['search'])): ?>
        <p>Résultat de la recherche pour : <?= $_GET['search'] ?></p>
      <?php endif ?>  
      <?php include './components/article-card-list.php'; ?>
    </div>
<?php include './components/footer.php' ?>


