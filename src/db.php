<?php
declare(strict_types=1);

$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASS');

global $DBH;
try {
    # MySQL через PDO_MYSQL
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log('Failed to connect to database: ' . $e->getMessage());
    die();
}

