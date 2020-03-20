<?php
declare(strict_types=1);

$STH = $DBH->query('SELECT * FROM main.albums');
$STH->setFetchMode(PDO::FETCH_ASSOC);

$template_name = 'albums.twig';
try {
    echo $twig->render($template_name, ['albums' => $STH->fetchAll()]);
} catch (\Twig\Error\Error $e) {
    $log->addRecord(Monolog\Logger::ERROR, "Failed to load $template_name" . $e->getMessage());
}
