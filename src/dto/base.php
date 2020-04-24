<?php
declare(strict_types=1);
namespace Somatik;

use PDO;

require_once __DIR__.'/../db.php';

/**
 * Prints date from utc
 * @param $timestamp
 * @return string
 */
function release_date($timestamp): string
{
    return date('d.m.Y',$timestamp);
}


trait Base
{
    public int $id;

    protected static function DBH(): PDO {
        global $DBH;
        return $DBH;
}

    public static function getById(int $id): self
    {
        global $DBH;
        $table = self::$TABLE;
        /** @noinspection SqlResolve */
        $stmt = $DBH->prepare("SELECT * FROM $table WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchObject(__CLASS__);
    }

    public static function getAll():array
    {
        global $DBH;
        $table = self::$TABLE;
        $stmt = $DBH->query("SELECT * FROM $table");
        return $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }
}
