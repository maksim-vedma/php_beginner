<?php
$fruits = ['cerise', 'banane', 'pêche', 'abricot', 'kiwi'];
?>
        <section>
            <h2>Liste de fruits</h2>

            <?php if (empty($fruits)): ?>
                <p>Désolé, rupture de stock !</p>
            <?php else: ?>
                <ul>
                  <?php foreach ($fruits as $fruit): ?>
                      <li><?= $fruit ?></li>
                  <?php endforeach ?>
                </ul>
            <?php endif ?>
        </section>
    </div>
