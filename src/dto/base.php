<?php
declare(strict_types=1);
namespace Somatik;

use PDO;

trait Base
{
    public int $id;

    public static function getById(int $id): self
    {
        global $DBH;
        $stmt = $DBH->prepare(self::$QUERY_ONE);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchObject(__CLASS__);
    }

    public static function getAll():array
    {
        global $DBH;
        $stmt = $DBH->query(self::$QUERY_ALL);
        return $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }
}
