<?php
declare(strict_types=1);

use App\Album;

require_once __DIR__ . '/../src/utils/include.php';

render('albums.php', 'Albums', ['albums' => Album::all()]);
