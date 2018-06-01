INSERT INTO writer (name, patronymic, surname, id_country, id_century, quote)
VALUES ('Дейл', 'Бре́кенридж', 'Карнеги' , 2, 6,
        'Каждый человек хотя бы пять минут в день бывает дураком. Настоящая мудрость состоит в том, чтобы не превышать этот временной лимит.');


INSERT INTO writer (name, patronymic, surname, country, century, quote)
VALUES ('Михаил', 'Афанасьевич', 'Булгаков', 'Россия', 20,
        'Злых людей нет на свете, есть только люди несчастливые.');


SELECT *
FROM century;

SELECT * FROM writer;

UPDATE writer
SET
  intoduction_content = ('Стоял у истоков создания теории общения, переведя научные разработки психологов того времени в практическую область, разработав собственную концепцию бесконфликтного общения.
   Основал курсы по самосовершенствованию, навыкам эффективного общения, выступления и другие.')
WHERE id_writer = 5;

UPDATE writer
SET famous_book = ('"Как перестать беспокоиться и начать жить", "Как завоёвывать друзей и оказывать влияние на людей"')
WHERE id_writer = 5;


UPDATE writer
SET content = ('<h2>Детство и юность</h2>
<p>Писатель родился в Киеве в семье профессора-богослова Афанасия Ивановича и его супруги Варвары Михайловны, которая занималась воспитанием семерых детей. Миша был самым старшим ребенком и по возможности помогал родителям управляться с хозяйством. Из остальных детей Булгаковых известность получили Николай, ставший ученым-биологом, Иван, прославившийся в эмиграции как музыкант-балалаечник, и Варвара, которая оказалась прототипом Елены Турбиной в романе &laquo;Белая гвардия&raquo;.</p>
<p>После окончания гимназии Михаил Булгаков поступает в университет на медицинский факультет. Его выбор оказался связан исключительно с меркантильным желанием &ndash; оба дяди будущего писателя были врачами и очень хорошо зарабатывали. Для мальчика, выросшего в многодетной семье, этот нюанс был основополагающим.</p>
<p>Во время Первой мировой войны Михаил Афанасьевич служил в прифронтовой зоне в должности доктора, после чего врачевал в Вязьме, позднее - в Киеве, в качестве венеролога. В начале 20-х годов он переезжает в Москву и начинает литературную деятельность, сначала как фельетонист, позднее &ndash; как драматург и театральный режиссер МХАТа и Центрального театра рабочей молодёжи.</p>
<p>Первой опубликованной книгой Михаила Булгакова была повесть &laquo;Похождения Чичикова&raquo;, написанная в сатирической манере. За ней последовали частично автобиографические &laquo;Записки на манжетах&raquo;, социальная драма &laquo;Дьяволиада&raquo; и первое крупное произведение писателя &ndash; роман &laquo;Белая гвардия&raquo;. Удивительно, но первый роман Булгакова критиковали со всех сторон: местная цензура назвала его антикоммунистическим, а зарубежная пресса отзывалась как о слишком лояльном как раз к Советской власти.</p>
<p>О начале своей врачебной деятельности Михаил Афанасьевич поведал в сборнике рассказов &laquo;Записки юного врача&raquo;, который и сегодня читается с огромным интересом. Особенно выделяется рассказ &laquo;Морфий&raquo;. С медициной связана и одна из самых известных книг автора &ndash; &laquo;Собачье сердце&raquo;, хотя в действительности она является тонкой сатирой на современную Булгакову действительность. Тогда же была написана и фантастическая повесть &laquo;Роковые яйца&raquo;.</p>
<p>К 1930 году произведения Михаила Афанасьевича перестали печатать. Например, &laquo;Собачье сердце&raquo; впервые было опубликовано только в 1987 году, &laquo;Жизнь господина де Мольера&raquo; и &laquo;Театральный роман&raquo; - в 1965-ом. А самый сильный и невероятно масштабный роман &laquo;Мастер и Маргарита&raquo;, который Булгаков писал с 1929 года и до самой смерти, впервые увидел свет только в конце 60-х годов и то &ndash; в сокращенном виде.</p>
<p>В марте 1930-го года потерявший почву под ногами писатель отправляет письмо правительству, в котором просит решить его судьбу &ndash; или разрешить эмигрировать, или дать возможность работать. В результате ему позвонил лично Иосиф Сталин и сказал, что ему будет позволено ставить спектакли. Но издание книг Булгакова при его жизни так и не возобновилось.</p>
<h2>Театр</h2>
<p>Еще в 1925 году на сцене московских театров с большим успехом ставились пьесы Михаила Булгакова - &laquo;Зойкина квартира&raquo;, &laquo;Дни Турбиных&raquo; по роману &laquo;Белая гвардия&raquo;, &laquo;Бег&raquo;, &laquo;Багровый остров&raquo;. Через год министерство хотело запретить постановку &laquo;Дней Турбиных&raquo; как &laquo;антисоветскую штучку&raquo;, но решено было этого не делать, так как спектакль очень нравился Сталину, который посетил его 14 раз.</p>
<p>Вскоре пьесы Булгаковы были все же сняты из репертуара всех театров страны и только в 1930-ом году, после личного вмешательства Вождя, Михаил Афанасьевич был восстановлен как драматург и режиссер.</p>
<h2>Личная жизнь</h2>
<p>Первой женой великого писателя была Татьяна Лаппа. Их свадьба была более чем бедной &ndash; у невесты даже не было фаты, да и жили они затем весьма скромно. Кстати, именно Татьяна стала прототипом для Анны Кирилловны из рассказа &laquo;Морфий&raquo;.</p>
<p>В 1925 году Булгаков познакомился с Любовью Белозёрской, происходившей из старинного рода князей. Она увлекалась литературой и полностью понимала Михаила Афанасьевича как творца. Писатель тут же разводится с Лаппой и женится на Белозерской.</p>
<p>А в 1932 году он встречает Елену Сергеевну Шиловскую, урожденную Нюрнберг. Булгаков бросает вторую супругу и ведет под венец третью. Между прочим, именно Елена выведена в самом знаменитом его романе в образе Маргариты. С третьей женой Булгаков прожил до конца жизни, и именно она приложила титанические усилия, чтобы впоследствии произведения ее любимого человека были опубликованы. Ни с одной из жен у Михаила детей не рождалось.</p>
<p>Существует забавная арифметически-мистическая ситуация с супругами Булгакова. Каждая из них имела по три официальных брака, как и он сам. Причем для первой жены Татьяны Михаил был первым супругом, для второй Любови &ndash; вторым, а для третьей Елены, соответственно, третьим. Так что мистика у Булгакова присутствует не только в книгах, но и в жизни.</p>
<h2>Последние годы жизни</h2>
<p>В 1939 году писатель работал над пьесой &laquo;Батум&raquo; об Иосифе Сталине, в надежде, что такое произведение точно не запретят. Пьеса уже готовилась к постановке, когда пришло указание прекратить репетиции. После этого у Булгакова начало резко ухудшаться здоровье &ndash; он стал терять зрение, дала о себе знать и врожденная болезнь почек.</p>
<p>Михаил Афанасьевич вернулся к употреблению морфия для снятия болевых симптомов. С зимы 1940 года драматург перестал вставать с постели, а 10 марта великого писателя не стало. Похоронен Михаил Булгаков на Новодевичьем кладбище, а на его могиле по настоянию супруги положен камень, который ранее был установлен на могиле Николая Гоголя.</p>')
WHERE id_writer = 2;

INSERT writer_signature (id_writer, filename)
VALUES (2, 'Mikhail_Bulgakov_signature.svg');

SELECT *
FROM writer_signature;

UPDATE writer
SET
  intoduction_content = 'Широкое признание Хемингуэй получил благодаря как своим романам и многочисленным рассказам — с одной стороны, так и своей жизни, полной приключений и неожиданностей, — с другой. Его стиль, краткий и насыщенный, значительно повлиял на литературу XX века.'
WHERE id_writer = 1;

UPDATE writer
SET card_description = 'Американский педагог, лектор, писатель, оратор-мотиватор.'
WHERE writer.id_writer = 5;

SELECT * FROM writer;

UPDATE writer
SET famous_book = '"Старик и море",  "Прощай, оружие!"';

INSERT INTO genre_writer (id_writer, id_genre)
VALUES (1, 4),
  (1, 6);

INSERT INTO genre_writer (id_writer, id_genre)
VALUES (2, 3),
  (2, 4),
  (2, 16),
  (2, 5),
  (2, 6),
  (2, 2);

SELECT *
FROM writer;

SELECT *
FROM genre_writer;

INSERT INTO genre (name_genre)
VALUES ('Мистика');

SELECT *
FROM writer
  INNER JOIN main_writer_picture ON writer.id_writer = main_writer_picture.id_writer;

SELECT *
FROM century;
INSERT INTO century (name_century)
VALUES ('15'),
  ('16'),
  ('17'),
  ('18'),
  ('19'),
  ('20'),
  ('21');

INSERT INTO writer_picture (id_writer, filename)
VALUES (2, '03_Zh3u4fa.jpg'),
  (2, '07_lnR8oTc.jpg'),
  (2, '11_TQQ8h11.jpg'),
  (2, '609221_900.png'),
  (2, '1463065283-celeb_img_None.jpg'),
  (2, 'original.jpg'),
  (2, 'original (1).jpg'),
  (2, 'tit-73-e1516213757220.jpg');

INSERT INTO main_writer_picture (id_writer, filename)
VALUES (5, 'Karnegi.jpg');

UPDATE main_writer_picture
SET filename = 'Karnegi.jpg'
WHERE id_writer = 5;

SELECT * FROM main_writer_picture;

# мистика 20 Россия

SELECT DISTINCT
  writer.*,
  country.name AS country_name,
  main_writer_picture.filename
FROM writer
  INNER JOIN genre_writer ON writer.id_writer = genre_writer.id_writer
  INNER JOIN genre ON genre_writer.id_genre = genre.id_genre
  INNER JOIN century ON writer.id_century = century.id_century
  INNER JOIN country ON writer.id_country = country.id_country
  INNER JOIN main_writer_picture ON writer.id_writer = main_writer_picture.id_writer
WHERE (century.id_century = 6) AND country.id_country = 1 AND genre_writer.id_genre IN (2);

SELECT * FROM main_writer_picture;

SELECT DISTINCT *
FROM writer
  INNER JOIN genre_writer ON writer.id_writer = genre_writer.id_writer
  INNER JOIN genre ON genre_writer.id_genre = genre.id_genre
  INNER JOIN century ON writer.id_century = century.id_century
  INNER JOIN country ON writer.id_country = country.id_country;

SELECT *
FROM writer;

SELECT DISTINCT country.name
FROM country
INNER JOIN writer ON country.id_country =  writer.id_country
WHERE country.id_country = 1;

SELECT DISTINCT century.name_century
FROM century
INNER JOIN writer ON century.id_century = writer.id_century
WHERE century.id_century = 6;

SELECT name_genre
FROM genre
WHERE id_genre = 3;


SELECT *

FROM century;

SELECT *
FROM writer;

SELECT *
FROM century;

SELECT DATE_FORMAT("2008-11-19", '%d.%m.%Y') AS date_of;
SELECT DATE_FORMAT("2008-11-19", '%m') AS date_of;

UPDATE writer
SET date_of_birth = '1888-11-24'
WHERE writer.id_writer = 5;

UPDATE writer
SET date_of_death = '1955-11-01'
WHERE writer.id_writer = 5;

INSERT INTO writer (date_of_birth)
VALUES ('1961-07-02');

SELECT * FROM genre_writer;

INSERT INTO genre_writer(id_writer, id_genre)
VALUES (5, 2);

# добавить внешний ключ к genre_writer


SELECT *
FROM writer;

UPDATE writer
SET id_century = 6
WHERE id_writer = 2;

SELECT *
FROM writer;

SHOW TABLES ;

SELECT
  writer.surname,
  writer_picture.filename
FROM writer_picture
  LEFT JOIN writer ON writer_picture.id_writer = writer.id_writer;

SELECT *
FROM writer
  LEFT JOIN writer_signature ON writer.id_writer = writer_signature.id_writer;

INSERT INTO country (name)
VALUES ('Россия'),
  ('США'),
  ('Китай');

SELECT *
FROM genre;

INSERT INTO genre (name_genre)
VALUES ('Роман-эпопея'),
  ('Психология'),
  ('Драма'),
  ('Роман'),
  ('Повесть'),
  ('Рассказ'),
  ('Комедия'),
  ('Трагедия'),
  ('Антиутопия'),
  ('Пьеса');

SELECT name_genre
FROM genre;

SELECT
  genre.name_genre,
  country.name
FROM genre, country;

SELECT * FROM writer;

SELECT id_century
FROM century
WHERE century.name_century = 'СШddsА';

INSERT INTO country(name) VALUES ()

SELECT LAST_INSERT_ID();

START TRANSACTION;
INSERT INTO writer(name, patronymic, surname, intoduction_content, content, card_description, quote, famous_book,
                   date_of_birth, date_of_death, id_country, years_of_life, id_century)
    VALUES ()
COMMIT;

SELECT * FROM writer;

INSERT INTO writer(name, patronymic, surname, intoduction_content, content, card_description,
                   quote, famous_book, date_of_birth, date_of_death, id_country, id_century)
VALUES ('Евгения', 'Александровна', 'Трапезникова', 'dfdf', 'dfdf', 'dfdf', 'fdf', 'dfdfd', '2018-04-28', '2080-04-04',1, 7);


SELECT * FROM main_writer_picture;
SELECT * FROM writer_signature;
SELECT * FROM writer_picture;

SELECT * FROM genre;
SELECT * FROM writer;
SELECT * FROM genre_writer;
SELECT w.id_writer, name, genre_writer.id_genre FROM genre_writer
LEFT JOIN writer w ON genre_writer.id_writer = w.id_writer;


DELETE FROM writer WHERE id_writer > 5;


SELECT * FROM writer_signature;