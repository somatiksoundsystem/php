<?php
declare(strict_types=1);

use App\Artist;

require_once __DIR__ . '/../src/utils/include.php';

render('artists.php', 'Artists', ['artists' => Artist::all()]);
