<?php
declare(strict_types=1);

require_once __ROOT__ . '/src/utils/include.php';
require_once __ROOT__ . '/src/dto/artist.php';

use Somatik\Artist;

render('artists.php', 'Artists', ['artists' => Artist::getAll()]);
