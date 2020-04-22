<?php
declare(strict_types=1);

namespace Somatik;

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

    function getPlayerUrl(): string
    {
        return "http://heyhey";
    }
}
