<?php
declare(strict_types=1);


use App\Model\Album;

;

require_once __DIR__ . '/../src/utils/include.php';

$path = $_SERVER['PATH'][0];

$album = Album::resolve(urldecode($path));
render('album.php', 'Album ' . $album->name, ['album' => $album]);
