<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    const VALUES = [
        self::VK,
        self::FACEBOOK,
        self::YOUTUBE,
        self::INSTAGRAM,
        self::SOUNDCLOUD,
        self::DISCOGS,
        self::BANDCAMP
    ];
    public const VK = 'vk';
    public const FACEBOOK = 'facebook';
    public const YOUTUBE = 'youtube';
    public const INSTAGRAM = 'instagram';
    public const SOUNDCLOUD = 'soundcloud';
    public const DISCOGS = 'discogs';
    public const BANDCAMP = 'bandcamp';

    public $timestamps = false;

    /**
     * Get the owning model.
     */
    public function owner()
    {
        return $this->morphTo();
    }
}
