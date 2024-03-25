<?php
require_once './functions.php';
$slides = getCarouselImages();
?>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">

    <?php foreach ($slides as $i => $slide): ?>
      <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
        <img src="./assets/images/slides/<?= $slide ?>" class="d-block w-100" alt="...">
      </div>
    <?php endforeach ?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="visually-hidden">Previous</span>
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
