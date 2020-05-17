<?php
declare(strict_types=1);

require_once __ROOT__ . '/src/utils/include.php';
require_once __ROOT__ . '/src/dto/album.php';

use Somatik\Album;

$albums = Album::getAll();

render('admin/login.php', 'Login', ['albums' => $albums]);
