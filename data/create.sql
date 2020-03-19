USE main;
# clean all
# Albums
SELECT *
FROM albums;

SELECT TIMESTAMP(STR_TO_DATE('31-12-2020', '%d-%m-%Y'));

# create albums
INSERT INTO albums (name, released_at, image_url, player_url)
VALUES ('Escape', TIMESTAMP(STR_TO_DATE('01.01.2018', '%d.%m.%Y')), 'album_escape.jpg',
        'https://api.soundcloud.com/playlists/506033388'),
       ('Girls', TIMESTAMP(STR_TO_DATE('01.01.2019', '%d.%m.%Y')), 'album_girls.jpg', DEFAULT),
       ('Neverendingstory', TIMESTAMP(STR_TO_DATE('01.01.2016', '%d.%m.%Y')), 'album_neverending-story.jpg', DEFAULT),
       ('Eat my face', TIMESTAMP(STR_TO_DATE('01.01.2016', '%d.%m.%Y')), 'album_eat-my-face.jpg', DEFAULT),
       ('Hidden by the leaves', TIMESTAMP(STR_TO_DATE('01.01.2016', '%d.%m.%Y')), 'album_hidden-by-the-leaves.jpg',
        DEFAULT),
       ('Luna', TIMESTAMP(STR_TO_DATE('01.01.2016', '%d.%m.%Y')), 'album_luna.jpg', DEFAULT),
       ('Mashapov', TIMESTAMP(STR_TO_DATE('01.01.2016', '%d.%m.%Y')), 'album_mashapov.jpg', DEFAULT),
       ('Raver baby', TIMESTAMP(STR_TO_DATE('01.01.2016', '%d.%m.%Y')), 'album_raver-baby.jpg', DEFAULT),
       ('Dissocination', TIMESTAMP(STR_TO_DATE('01.01.2016', '%d.%m.%Y')), 'album_dissocination.jpg', DEFAULT),
       ('Для Оргий И Хороводов', TIMESTAMP(STR_TO_DATE('01.01.2016', '%d.%m.%Y')), 'album_dlya-orgij-i-horovodov.jpg',
        DEFAULT),
       ('Remixes', TIMESTAMP(STR_TO_DATE('01.01.2016', '%d.%m.%Y')), 'album_pcp-remixes.jpg', DEFAULT);
