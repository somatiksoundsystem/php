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
            <?= include_template(__DIR__.'/block/social_link.php', ['link' => $link]) ?>
        <?php endforeach; ?>
    </div>
    <h1 class="artist__name"><?= h($artist->name) ?></h1>
    <p class="artist__info"><?= h($artist->info) ?></p>
</div>
<?= include_template(__DIR__ . '/block/player.php', ['playerUrl' => $artist->getPlayerUrl()]) ?>
<div class="artist__albums">
    <? print_array($artist->getAlbums(), function ($content) {
        echo "<ul class=\"albums\">", $content(function ($it) {
            return include_template(__DIR__ . '/block/album.php', ['album' => $it]);
        }), "</ul>";
    }) ?>
</div>
<p class="artist__schedule"></p>
<div class="photos__carousel"></div>