<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/utils/include.php';
require_once __DIR__ . '/../src/dto/album.php';

use Somatik\Album;

$path = $_SERVER['PATH'][0];

$id = intval($path);
$album = Album::getById($id);
render('album.php', 'Album ' . $album->name, ['album' => $album]);
