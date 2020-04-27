<?php
declare(strict_types=1);
namespace Somatik;

class SocialLink extends Base
{
    const VK = "vk";
    const FB = "facebook";
    const YOUTUBE = 'youtube';
    const INSTAGRAM = 'instagram';
    const SOUNDCLOUD = 'soundcloud';
    const DISCOGS = 'discogs';
    const BANDCAMP = 'bandcamp';

    public Base $parent;
    public string $name;
    public string $value;

    public function __construct($parent)
    {
        $this->parent = $parent;
    }

}