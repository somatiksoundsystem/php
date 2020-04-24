<?php
declare(strict_types=1);

namespace Somatik;

use PDO;
use PDOException;

require_once __DIR__ . '/base.php';
require_once __DIR__ . '/social_link.php';

class Artist
{
    use Base;

    const DUPLICATE_ENTITY = 23000;
    public static string $TABLE = 'main.artists';

    public string $nickname;
    public string $name;

    public string $info;
    public string $photo_url;
    public string $created_at;

    public ?string $email;
    public ?string $password;

    public function __construct()
    {
        $this->created_at = release_date(strtotime($this->created_at));
    }

    public static function resolve(string $idNameOrNickname): Artist
    {
        $stmt = self::DBH()->prepare("SELECT * FROM main.artists WHERE id = :id OR name = :idName OR nickname = :idName");
        $id = intval($idNameOrNickname) ?: -1;
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':idName', $idNameOrNickname, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchObject(__CLASS__);
    }

    function addSocialLink(string $name, string $value): bool
    {
        try {
            $stmt = self::DBH()
                ->prepare("INSERT INTO main.social_links(owner_id, name, value) VALUE (:id, :name, :value)");
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':value', $value, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            error_log((string) $e);

            return $e->getCode() === self::DUPLICATE_ENTITY;
        }

    }

    function getSocialLinks(): array
    {
        $stmt = self::DBH()
            ->prepare("SELECT * FROM social_links WHERE owner_id = :id");
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, SocialLink::class, [$this]);
    }

    function getPlayerUrl(): string
    {
        return "http://heyhey";
    }
}
