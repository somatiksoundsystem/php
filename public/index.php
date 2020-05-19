<?php
declare(strict_types=1);

use App\Somatik\Album;

require_once __DIR__ . '/../src/utils/include.php';

$albums = Album::getAll();

render('albums.php','Albums', ['albums' => $albums]);
