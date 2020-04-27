<?php
/**
 * @var \Somatik\Album $album
 */
?>
<div class="album">
    <h1 class="album__name"><?= h($album->name) ?></h1>
    <img class="album__img"
         src="/img/albums/thumb/<?= h($album->image_url) ?>"
         alt="<?= h($album->name) ?>" width="300"
         height="300">
    <div class="album__social">
        <?php foreach ($album->getSocialLinks() as $link): ?>
            <?= include_template(__DIR__.'/block/social_link.php', ['link' => $link]) ?>
        <?php endforeach; ?>
    </div>
    <h2 class="album__author">
        <? print_array($album->getArtists(), function ($content) {
            echo $content(function ($it) {
                return '<a class="albums__link" href="/artist/'.urlencode($it->nickname).'">'.h($it->nickname).'</a>';
            });
        }) ?>
    </h2>
    <h2 class="album__release-date">Release date: <?= $album->released_at ?></h2>
</div>

<?= include_template(__DIR__ . '/block/player.php', ['playerUrl' => $album->player_url]) ?>

