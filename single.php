<?php session_start(); ?>

<?php
include './articles.php';

$numeroArticle = 1;  // Par défaut on prend le premier article

// MAIS si on nous en demande un particulier, on prend celui là
if (isset($_GET['a'])) {
    $numeroArticle = $_GET['a'];  // On demmande l'article N
}

// On cherche notre article
$indexArticle = array_search(
    $numeroArticle,
    array_column($articles, 'id'),
);

$article = null;

if ($indexArticle !== false) {
    // Je récupère l'article numéro N
    $article = $articles[$indexArticle];
}
?>


<?php include './components/header.php'; ?>

<?php if ($article != null): ?>

  <article>
    <div class="container">
      <h1><?= $article['title'] ?></h1>
    </div>
    <img src="<?= $article['thumbnail'] ?>" class="article__image">
    <div class="container my-3">
      <p class="badge <?= $article['category'] ?>">
        <?= $article['category'] ?>
      </p>
      <p><?= $article['content'] ?></p>
      <div class="text-end mb-3">
        <small>Article rédigé par <?= $article['author'] ?></small><br/>
        <small>Publié le <?= $article['publishedAt'] ?></small>
      </div>
      <div class="row">
        <?php foreach ($article['images'] as $image): ?>
          <div class="col-lg-3 col-md-6 mb-3">
            <img src="<?= $image ?>" class="article__image">
          </div>
        <?php endforeach ?> 
      </div>
    </div>
  </article>
<?php else: ?>

  <p class="text-center my-5 text-danger">Cet article n'existe pas...</p>

<?php endif ?>

<?php include './components/footer.php' ?>
