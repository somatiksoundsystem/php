<?php
/**
 * @var int $id
 * @var string $image_url
 * @var string $name
 * @var string[] $authors
 */
?>
<li class="albums__item">
    <a class="albums__link" href="/album/<?= $album->$id ?>"><img class="albums__img"
                                                              src="/img/albums/thumb/<?= $image_url ?>"
                                                              alt="<?= $name ?>" width="300"
                                                              height="300"/>
        <h3 class="albums__author"><?= empty($authors) ? 'Empty' : h($authors) ?></h3>
        <h2 class="albums__title"><?= $name ?></h2></a>
</li>