<?php
declare(strict_types=1);
namespace Somatik;

use PDO;

class Artist
{
    public int $id;
    public string $nickname;
    public string $name;

    public string $info;
    public string $photo_url;
    public string $created_at;

    public ?string $email;
    public ?string $password;

    /**
     * Album constructor.
     */
    public function __construct()
    {
        $this->created_at = release_date(strtotime($this->created_at));
    }

    public static function load_by_id(int $id): Album
    {
        global $DBH;
        $stmt = $DBH->prepare('SELECT * FROM main.albums WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function getAll():array
    {
        global $DBH;
        $stmt = $DBH->query('SELECT * FROM main.artists');
        return $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }
}
