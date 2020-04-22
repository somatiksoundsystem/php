<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/utils/include.php';
require_once __DIR__ . '/../src/dto/artist.php';

use Somatik\Artist;

$path = $_SERVER['PATH'][0];

$id = intval($path);
$artist = Artist::getById($id);
$content = include_template('artist.php', ['artist' => $artist]);
render_page(['title' => 'Artist ' . $artist->nickname, 'content' => $content]);
