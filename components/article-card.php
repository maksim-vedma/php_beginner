  <article class="card h-100">
    <img src="<?= $article['thumbnail'] ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $article['title'] ?></h5>
      <p class="badge <?= $article['category'] ?>">
        <?= $article['category'] ?>
      </p>
      <p class="card-text"><?= substr($article['content'], 0, 100) . '...' ?></p>
      <a href="/single.php?a=<?= $article['id'] ?>" class="btn btn-success">Lire la suite</a>
    </div>
  </article>

