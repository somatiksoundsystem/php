<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/utils/include.php';
require_once __DIR__ . '/../src/dto/artist.php';

use Somatik\Artist;

$path = $_SERVER['PATH'][0];

$artist = Artist::resolve(urldecode($path));
render('artist.php', 'Artist ' . $artist->nickname, ['artist' => $artist]);
