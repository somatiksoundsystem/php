<?php
declare(strict_types=1);


namespace App\Somatik;


use PDO;
use PDOException;

/**
 * Prints date from utc
 * @param $timestamp
 * @return string
 */
function release_date($timestamp): string
{
    return date('d.m.Y', $timestamp);
}


abstract class Base
{
    const DUPLICATE_ENTITY = 23000;

    public int $id;

    function addSocialLink(string $name, string $value): bool
    {
        try {
            $stmt = self::DBH()
                ->prepare("INSERT INTO social_links(owner_id, type, name, value) VALUE (:id, :type, :name, :value)");
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':value', $value, PDO::PARAM_STR);
            $stmt->bindValue(':type', static::$TABLE, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            error_log((string)$e);

            return $e->getCode() === self::DUPLICATE_ENTITY;
        }

    }

    function getSocialLinks(): array
    {
        $stmt = self::DBH()
            ->prepare("SELECT * FROM social_links WHERE owner_id = :id AND type = :type");
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindValue(':type', static::$TABLE, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, SocialLink::class, [$this]);
    }

    public static function getById(int $id): self
    {
        global $DBH;
        $table = static::$TABLE;
        /** @noinspection SqlResolve */
        $stmt = $DBH->prepare("SELECT * FROM $table WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchObject(static::class);
    }

    public static function getAll(): array
    {
        global $DBH;
        $table = static::$TABLE;
        $stmt = $DBH->query("SELECT * FROM $table");
        return $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    protected static function DBH(): PDO
    {
        global $DBH;
        return $DBH;
    }
}
