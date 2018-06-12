SELECT *
FROM writer;
SELECT *
FROM writer_signature;
SELECT *
FROM writer_picture;
SELECT *
FROM writer_signature;
SELECT *
FROM main_writer_picture;
SELECT * FROM century;
SELECT * FROM country;
SELECT * FROM genre;

SELECT * FROM writer;

DELETE FROM century
WHERE id_century = 9;

DELETE FROM genre
WHERE genre.id_genre > 17;

SELECT * FROM writer_signature;