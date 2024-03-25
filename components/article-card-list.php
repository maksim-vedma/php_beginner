<div class="row">
<?php if (count($articles) > 0): ?>
  <?php foreach ($articles as $index => $article): ?>
    <div class="col-md-4 mb-3">
      <?php include './components/article-card.php'; ?>
    </div>
  <?php endforeach ?>
<?php else: ?>
  <p>Aucun résultat pour votre recherche...</p>
<?php endif ?> 
</div>
