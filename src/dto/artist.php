<?php
declare(strict_types=1);

namespace Somatik;

use PDO;

require_once __DIR__ . '/base.php';

class Artist
{
    use Base;

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

    function addSocialLink(string $name, string $value)
    {
        $stmt = self::DBH()->
        prepare("INSERT INTO main.social_links(owner_id, name, value) VALUE (:id, :name, :value)");
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':value', $value, PDO::PARAM_STR);
        $stmt->execute();
    }

    function getSocialLinks(): array
    {
        $stmt = self::DBH()
            ->prepare("SELECT * FROM social_links WHERE owner_id = :id");
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, SocialLink::class);
    }


    function getPlayerUrl(): string
    {
        return "http://heyhey";
    }
}
