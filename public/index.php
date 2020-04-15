<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/util.php';
require_once __DIR__ . '/../src/utils/include.php';

$STH = $DBH->query('SELECT * FROM main.albums');
$STH->setFetchMode(PDO::FETCH_ASSOC);

$content = include_template('albums.php', ['albums' => $STH->fetchAll()]);
render_page(['title' => 'Albums', 'content' => $content], ['albums' => $STH->fetchAll()]);
