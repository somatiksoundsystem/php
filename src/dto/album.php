<?php
declare(strict_types=1);
namespace Somatik;

require_once __DIR__.'/base.php';

class Album
{
    use Base;
    public static string $QUERY_ALL = 'SELECT * FROM main.albums';
    public static string $QUERY_ONE = 'SELECT * FROM main.albums WHERE id = :id';

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
}
