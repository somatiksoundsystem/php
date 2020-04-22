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
<!--        TODO: Social-->
        <a class="social-link" target="_blank"
           href="https://soundcloud.com/user-930539857">
            <svg width="32" height="32">
                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                     xlink:href="/icon/bundle.min.svg#soundcloud"></use>
            </svg>
        </a>
        <a class="social-link" target="_blank" href="https://www.instagram.com/evgeny_malashenkov/">
            <svg width="32" height="32">
                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                     xlink:href="/icon/bundle.min.svg#instagram"></use>
            </svg>
        </a>
        <a class="social-link" target="_blank" href="https://vk.com/u3nik">
            <svg width="32" height="32">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icon/bundle.min.svg#vk"></use>
            </svg>
        </a>
        <a class="social-link" target="_blank"
           href="https://www.facebook.com/profile.php?id=100010250283615">
            <svg width="32" height="32">
                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                     xlink:href="/icon/bundle.min.svg#facebook"></use>
            </svg>
        </a>
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