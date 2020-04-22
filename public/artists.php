<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/utils/include.php';
require_once __DIR__ . '/../src/dto/artist.php';

use Somatik\Artist;

$content = include_template('artists.php', ['artists' => Artist::getAll()]);
render_page(['title' => 'Artists', 'content' => $content]);
