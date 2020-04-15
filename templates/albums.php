<?php
/** @var object[] $albums */
?>
<ul class="albums">
    <?php foreach ($albums as $album): ?>
        <?= include_template('block/album.php', $album) ?>
    <?php endforeach; ?>
</ul>