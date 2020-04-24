<?php

//var_dump($_SERVER);
//var_dump($_GET);


use Somatik\Artist;
use Somatik\SocialLink;

require_once __DIR__ . '/../src/dto/artist.php';

$artist = Artist::resolve("dubsane");
var_dump($artist);
$artist->addSocialLink(SocialLink::VK, "https://vk.com/dubsane");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/dubsane");
var_dump($artist->getSocialLinks());
