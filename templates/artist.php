<?php
/**
 * @var \Somatik\Artist $artist
 */
?>
<div class="artist">
    <h1 class="artist__nickname"><?= h($artist->nickname) ?></h1><img class="artist__img"
                                                                      src="/img/artists/thumb/<?= h($artist->photo_url) ?>"
                                                                      alt="<?= h($artist->nickname) ?>" width="300"
                                                                      height="400">
    <div class="artist__social">
        <?php foreach ($artist->getSocialLinks() as $link): ?>
            <a class="social-link" target="_blank"
               href="<?= h($link->value) ?>">
                <svg width="32" height="32">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                         xlink:href="/icon/bundle.min.svg#<?= $link->name ?>"></use>
                </svg>
            </a>
        <?php endforeach; ?>
    </div>
    <h1 class="artist__name"><?= h($artist->name) ?></h1>
    <p class="artist__info"><?= h($artist->info) ?></p>
</div>
<?= include_template('block/player.php', ['playerUrl' => $artist->getPlayerUrl()]) ?>
<div class="artist__albums">
    <ul class="albums"></ul>
</div>
<p class="artist__schedule"></p>
<div class="photos__carousel"></div>