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

    public string $name;
    public string $value;



}