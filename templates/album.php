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
    <!--        {# TODO: social#}-->
    <div class="album__social">
        <a class="social-link" target="_blank"
           href="https://vk.com/music?z=audio_playlist16058189_73062618">
            <svg width="32" height="32">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icon/bundle.min.svg#vk"></use>
            </svg>
        </a><a class="social-link" target="_blank"
               href="https://soundcloud.com/altabdubsane/sets/dubsane-escape">
            <svg width="32" height="32">
                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                     xlink:href="/icon/bundle.min.svg#soundcloud"></use>
            </svg>
        </a>
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

