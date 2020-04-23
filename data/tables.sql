DROP DATABASE main;

CREATE DATABASE main
    CHARACTER SET utf8
    DEFAULT CHARACTER SET utf8
    COLLATE utf8_general_ci
    DEFAULT COLLATE utf8_general_ci;

USE main;

CREATE TABLE artists
(
    id         INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    created_at TIMESTAMP DEFAULT NOW(),

    nickname   VARCHAR(255) NOT NULL UNIQUE,
    name       VARCHAR(255) NOT NULL,
    email      VARCHAR(255) UNIQUE,
    password   VARCHAR(60) CHARACTER SET binary,

    info       LONGTEXT,
    photo_url  VARCHAR(255)
);

CREATE TABLE social_links
(
    owner_id INT UNSIGNED NOT NULL,

    name     ENUM (
        'vk',
        'facebook',
        'youtube',
        'instagram',
        'soundcloud',
        'discogs',
        'bandcamp')       NOT NULL,
    value    VARCHAR(512) UNIQUE NOT NULL,

    UNIQUE KEY (name, value)
);

CREATE TABLE albums
(
    id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(255) NOT NULL,
    image_url   VARCHAR(255) NOT NULL,
    released_at TIMESTAMP DEFAULT NOW(),

    player_url  VARCHAR(1024) UNIQUE
);

CREATE TABLE artist_albums
(
    album_id  INT UNSIGNED NOT NULL,
    artist_id INT UNSIGNED NOT NULL,

    PRIMARY KEY (album_id, artist_id),
    FOREIGN KEY (album_id) REFERENCES albums (id)
        ON DELETE RESTRICT,
    FOREIGN KEY (artist_id) REFERENCES artists (id)
        ON DELETE RESTRICT
);
