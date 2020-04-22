<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/utils/include.php';
require_once __DIR__ . '/../src/dto/album.php';

use Somatik\Album;

$path = $_SERVER['PATH'][0];

$id = intval($path);
$album = Album::load_by_id($id);
$content = include_template('album.php', ['album' => $album]);
render_page(['title' => 'Album ' . $album->name, 'content' => $content]);
