<?php

class Album
{
    public string $id;
    public string $name;
    public string $image_url;
    public ?string $player_url;
    public int $released_at;

    /**
     * Album constructor.
     */
    public function __construct()
    {
        $this->released_at = strtotime($this->released_at);
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
        $stmt = $DBH->prepare('SELECT * FROM main.albums');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }
}
