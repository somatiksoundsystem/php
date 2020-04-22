<?php
declare(strict_types=1);
namespace Somatik;

use PDO;

class Album
{
    public int $id;
    public string $name;
    public string $image_url;
    public ?string $player_url;
    public string $released_at;

    /**
     * Album constructor.
     */
    public function __construct()
    {
        $this->released_at = release_date(strtotime($this->released_at));
    }

    public static function load_by_id(int $id): Album
    {
        global $DBH;
        $stmt = $DBH->prepare('SELECT * FROM main.albums WHERE id = :id');
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchObject(__CLASS__);
    }

    public static function getAll():array
    {
        global $DBH;
        $stmt = $DBH->query('SELECT * FROM main.albums');
        return $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }
}
