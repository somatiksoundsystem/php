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

# create artists
INSERT INTO artists (nickname, name, info, photo_url)
VALUES ('Arthur Tourenism', 'Arthur Mikhe Tourenism',
        'Minsk based composer and sound designer. Co-founder / owner of Elemental Voices Records. The old resident of Somatik Sound System.',
        'arthur_tourenism.jpg'),
       ('Petr Nikitin', 'Nikita Petrashev',
        'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.',
        'petr_nikitin.jpg'),
       ('Dubsane', 'Alex Palastrov', 'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.', 'dubsane.jpg'),
       ('Lem', 'Nicholas LEM',
        'Somatik techno and ghettopsychedelic producer from Saint-P. Nicholas LEM - коренной представитель питерской школы somatik techno, оригинальный музыкант, чье творчество признано в России и за рубежом. Специалист по синтезаторам и саунд-дизайнер шведской фирмы Elektron, которая публикует его звуки в качестве официальных банков данных к своим инструментам. Экспериментальный, мощный аналоговый саунд, созданный LEM, изобилует глубокими вибрациями и виртуозными манипуляциями с ритм-машиной и свидетельствует о том, что русская электроника еще может удивлять',
        'lem.jpg'),
       ('Dronum', 'Ivanov Ivan Invanovich',
        'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.', 'default.png'),
       ('Vova PCP', 'Ivanov Ivan Invanovich', 'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.', 'default.png'),
       ('Tsaritsa Logiki', 'Ivanov Ivan Invanovich', 'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.', 'default.png'),
       ('Alex Cool', 'Алексей Кулагин',
        '«Когда слушаешь его треки, становится ясно, что слово "COOL" в его псевдониме означает дикий, 45-градусный сибирский холод. На фоне которого, по практически безжизненному пейзажу шагает, раскачиваясь, покрытый инеем, лязгающий, металлический бит, линии acid-арпеджио вспыхивают как газовые факела, а сверху светящимися восходящими потоками летит мелодия, в которой слышны гармонии ушедшей древней империи Востока. Так могло бы звучать ритуальное техно, если бы оно появилось на планете Татуин.», - Vova PCP.',
        'alex_cool.jpg'),
       ('Office Passenger', 'Игорь Ряков', 'Самогенерирующиеся закрученные сюжетные линии внутренних переживаний обычного офисного клерка
пропущенная через кучу синтезаторов и всяческих педалей', 'office_passenger.jpg'),
       ('Primary Substance', 'Алексей Семенов', 'Российский музыкальный проект, основанный в 2010 году в Санкт-Петербурге, музыкантом, рэпером и саунд дизайнером Алексеем Семеновым.
  Алексей Семенов известен, как создатель нескольких танцевальных и экспериментальных музыкальных проектов (Don’ttouchmebitch!, Russian outskirts, Харакири мс, there were) и участник ряда разных групп и объединений в Санкт-Петербурге и за его пределами. Участник крупных европейских и российских фестивалей, создатель ярких перформансов и необычных коллабораций.
  “Понятие музыки для меня, это нечто гораздо большее, чем создание треков для электронно-танцевальной индустрии, в соответствии с ее правилами и законами жанров. Мои творческие задачи каждый раз предполагают новые исследования. Будь то реализация субъективных психических содержаний и абстракций вроде сиюминутного настроения в конкретной звуковой форме, или чисто технические процессы из области саунд-дизайна. Это всегда погружение в темноту неизвестного, всегда путешествие без карты…',
        'primary_substance.jpg'),
       ('Kinestetic', 'Ivanov Ivan Invanovich', 'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.', 'default.png'),
       ('DOQTA', 'Сергей Ефимов',
        'DOQTA электронный музыкант и экспериментальный продюсер из СПб, резидент Somatik Sound System (один из первых начал привлекать МС и использовать рэп акапеллы для записи соматик треков), Психея Саундсистем и bastardboogietunes soundsystem, участник и организатор многочисленных субкультурных проектов (Feodoq, Perecore, Враги, Adubtors, Stirka40, Duku and etc), техно-турист (исколесил с выступлениями треть планеты, 16 стран, сотни фестивалей и тысячи клубов, в том числе берлинский Трезор).',
        'doqta.jpg'),
       ('NPLM', 'Ivanov Ivan Invanovich', 'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.', 'default.png'),
       ('U3niko', 'Евгений Малашенков',
        'The project U3niko music interpretation of the relationship of nature, people and robots. Robots as part of nature, the product of man and the highest stage of evolution.',
        'u3niko.jpg'),
       ('Kashapov', 'Евгений Кашапов',
        'Один из первых соматик диджеев. В секте с 2014 года. В 2016 стал сооснователем подпольного бара "точка", который стал легендой петербургского андеграунда. В 2017 проехал полстраны автостопом выступая в разных городах. В 2019 создал проект машапов, в котором создаю машап ремиксы на всякие песни.',
        'kashapov.jpg'),
       ('Kansai', 'Павел Кондыгин',
        'KANSAI - это DJ и Саунд продюсер из маленького посёлка Сорум, в ХМАО-Югре с населением в 1500 человек. В 2013 году KANSAI побывал в Санкт-Петербурге, познакомился с группой P.C.P., с Somatik и с их творчеством. После поездки в Питер, был написан трек - Blinking Vandals, затем еще несколько треков, а также вторая версия трека Blinking vandals. На тот момент, интернета в Соруме практически не было, поэтому треки приходилось отправлять на флешках. В 2017 году  на SS вышел альбом "Blinking vandals". В октябре 2018 года на Somatik Sound System вышел альбом "Tripster", в июле 2019 года EP "Sub Sun"',
        'kansai.jpg'),
       ('Bees And Cobras', 'Евгений Псов', 'undefined', 'bees_and_cobras.jpg'),
       ('Aedem', 'Константин Терентьев',
        'Электронный музыкант из Санкт-Петербурга. Автор трех альбомов, выпущенных на Microcosmos Records. С 2016 года резидент Somatik Sound System, где выпустил несколько релизов, под которые любители самых разных жанров электроники успешно двигают телами в ритме 90 bpm. Музыка Aedem - это полет фантазии, быстрые переходы из мрачной романтики в интенсивный драйв, острый пронизывающий саунд, с тонким чувством вкуса сплетённые эмбиент, пситранс, техно - все это делает его творчество узнаваемым с первых тактов.',
        'aedem.jpg'),
       ('ICD', 'Ivanov Ivan Invanovich', 'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.', 'default.png'),
       ('Cylriel', 'Ivanov Ivan Invanovich', 'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.', 'default.png'),
       ('Dopesmoker', 'Ivanov Ivan Invanovich', 'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.', 'default.png'),
       ('Costas Alexas', 'Ivanov Ivan Invanovich', 'Consequuntur omnis non qui voluptatem praesentium libero eos non. Quibusdam vitae
        aperiam inventore itaque sapiente rerum laboriosam accusamus. Non molestiae voluptas nobis possimus est
        expedita. Impedit repellendus repellat voluptas fugit. In consectetur ipsum qui. Dolorem mollitia voluptatem
        provident reprehenderit.', 'default.png');

SET @dubsane = -1;
SELECT id FROM artists WHERE nickname = 'Dubsane' INTO @dubsane;
SELECT @dubsane;
INSERT INTO social_links(owner_id, name, value)
VALUES (@dubsane, 'vk', 'https://vk.com/dubsane')
