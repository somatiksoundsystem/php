<?php
declare(strict_types=1);

$STH = $DBH->query('SELECT * FROM main.albums');
$STH->setFetchMode(PDO::FETCH_ASSOC);

require_once __DIR__ . '/../src/utils/include.php';

$content = include_template('albums.php', ['albums' => $STH->fetchAll()]);
render_page(['title' => 'Albums', 'content' => $content]);
