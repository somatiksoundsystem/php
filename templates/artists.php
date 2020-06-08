<?php
/** @var \App\Model\Artist[] $artists */
?>
<ul class="artists">
    <?php foreach ($artists as $artist): ?>
        <li class="artists__item"><a class="artists__link" href="/artist/<?= $artist->id ?>">
                <img class="artists__img"
                     src="/img/artists/thumb/<?= h($artist->photo_url) ?>"
                     alt="<?= h($artist->name) ?>"
                     width="300" height="400">
                <h2 class="artists__title"><?= h($artist->name) ?></h2></a></li>
    <?php endforeach; ?>
</ul>