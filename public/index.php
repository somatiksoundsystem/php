<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/utils/include.php';

render('albums.php', 'Albums', ['albums' => \App\Model\Album::all()]);
