<?php
/** @var array $albums */
?>
<ul class="albums">
    <?php foreach ($albums as $album): ?>
        <?= include_template('block/album.php', ['album' => $album]) ?>
    <?php endforeach; ?>
</ul>