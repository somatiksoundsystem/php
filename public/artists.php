<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/utils/include.php';
require_once __DIR__ . '/../src/dto/artist.php';

use Somatik\Artist;

render('artists.php', 'Artists', ['artists' => Artist::getAll()]);
