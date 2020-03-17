<?php

$host = 'mysql';
$dbname = 'main';
$user = 'admin';
$pass = 'admin';

try {
    # MySQL через PDO_MYSQL
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (PDOException $e) {
    echo $e->getMessage();
}

$DBH->prepare('DELECT name FROM people')->execute();
