<?php
declare(strict_types=1);

$path = $_SERVER['PATH'][0];

$stmt = $DBH->prepare('SELECT * FROM main.albums WHERE id = :id');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->bindValue(':id', $path, PDO::PARAM_INT);
$stmt->execute();

$album = $stmt->fetch();
require_once __DIR__.'/../src/util.php';
$render('album.twig', ['album' => $album]);
