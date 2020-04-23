<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/utils/include.php';
require_once __DIR__ . '/../src/dto/album.php';

use Somatik\Album;

$albums = Album::getAll();

render('albums.php','Albums', ['albums' => $albums]);
