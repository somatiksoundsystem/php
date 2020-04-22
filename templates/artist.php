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
<div class="player">
    <!--suppress HtmlDeprecatedAttribute -->
    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
            src="https://w.soundcloud.com/player/?url=https%3A%2F%2Fsoundcloud.com%2Fuser-930539857&amp;color=%23131416&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;show_teaser=false"></iframe>
</div>
<div class="artist__albums">
    <ul class="albums"></ul>
</div>
<p class="artist__schedule"></p>
<div class="photos__carousel"></div>