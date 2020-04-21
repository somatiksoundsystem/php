<?php
declare(strict_types=1);

$path = $_SERVER['PATH'][0];

require_once __DIR__ . '/../src/util.php';
require_once __DIR__ . '/../src/utils/include.php';

$stmt = $DBH->prepare('SELECT * FROM main.albums WHERE id = :id');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->bindValue(':id', $path, PDO::PARAM_INT);
$stmt->execute();

$album = $stmt->fetch();
$content = include_template('album.php', ['album' => $album]);
render_page(['title' => 'Album '.$album['name'], 'content' => $content]);
