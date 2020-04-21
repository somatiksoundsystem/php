<?php
declare(strict_types=1);

$STH = $DBH->query('SELECT * FROM main.artists');
$STH->setFetchMode(PDO::FETCH_ASSOC);

require_once __DIR__ . '/../src/utils/include.php';

$content = include_template('artists.php', ['artists' => $STH->fetchAll()]);
render_page(['title' => 'Artists', 'content' => $content]);
