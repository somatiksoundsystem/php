<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/utils/include.php';
require_once __DIR__ . '/../src/dto/album.php';

$albums = Album::getAll();

$content = include_template('albums.php', ['albums' => $albums]);
render_page(['title' => 'Albums', 'content' => $content]);
