<?php
/**
 * @var object $album
 * @var int $id
 * @var string $image_url
 * @var string $name
 * @var string[] $authors
 */
?>
<div class="album"><h1 class="album__name"><?= h($album->name) ?></h1>
    <img class="album__img"
         src="/img/albums/thumb/<?= h($album->image_url) ?>"
         alt="<?= h($album->name) ?>" width="300"
         height="300">
    <!--        {# TODO: social#}-->
    <div class="album__social">
        <div class="artist__social"><a class="social-link" target="_blank"
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
            </a></div>
    </div>
    <!--        {# TODO: author#}-->
    <h2 class="album__author"><a class="albums__link" href="/artist/doqta">DOQTA</a></h2>
    <h2 class="album__release-date">Release date: <?= $album->released_at ?></h2></div>
<!--    {#TODO: fix player#}-->
<div class="player">
    <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay"
            src="https://w.soundcloud.com/player/?url=https%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F506033388&amp;color=%23131416&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;show_teaser=false"></iframe>
</div>