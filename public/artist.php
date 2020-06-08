<?php
declare(strict_types=1);

use App\Model\Artist;

;

require_once __DIR__ . '/../src/utils/include.php';

$path = $_SERVER['PATH'][0];

$artist = Artist::resolve(urldecode($path));
render('artist.php', 'Artist ' . $artist->nickname, ['artist' => $artist]);
