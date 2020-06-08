<?php
/**
 * @var App\Model\Album; $album
 */
?>
<li class="albums__item">
    <a class="albums__link" href="/album/<?= urlencode($album->name) ?>"><img class="albums__img"
                                                                              src="/img/albums/thumb/<?= $album->image_url ?>"
                                                                              alt="<?= h($album->name) ?>" width="300"
                                                                              height="300"/>
        <h3 class="albums__author"><?= $album->authors->map(function ($it) {
            return h($it->nickname);
            })->join(', ') ?></h3>
        <h2 class="albums__title"><?= h($album->name) ?></h2></a>
</li>