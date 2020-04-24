<?php

namespace Somatik;

class SocialLink
{
    use Base;

    const VK = "vk";
    const FB = "facebook";
    const YOUTUBE = 'youtube';
    const INSTAGRAM = 'instagram';
    const SOUNDCLOUD = 'soundcloud';
    const DISCOGS = 'discogs';
    const BANDCAMP = 'bandcamp';

    public Artist $parent;
    public string $name;
    public string $value;

    public function __construct($parent)
    {
        $this->parent = $parent;
    }

}