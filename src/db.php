<?php
declare(strict_types=1);

$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
global $DBH;
try {
    # MySQL через PDO_MYSQL
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", getenv('DB_USER'), getenv('DB_PASS'));
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (PDOException $e) {
    $log->log(Monolog\Logger::ERROR, 'Failed to connect to database: ' . $e->getMessage());
    die();
}

