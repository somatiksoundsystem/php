<?php
declare(strict_types=1);

require_once __DIR__.'/../src/util.php';

$STH = $DBH->query('SELECT * FROM main.artists');
$STH->setFetchMode(PDO::FETCH_ASSOC);

$render('artists.twig', ['artists' => $STH->fetchAll()]);
