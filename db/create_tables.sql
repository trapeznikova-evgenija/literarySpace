CREATE DATABASE IF NOT EXISTS literary_space
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE  utf8_general_ci;

USE literary_space;

SHOW TABLES ;

SELECT * FROM genre;
SELECT * FROM writer;

SHOW VARIABLES ;
SET CHARACTER_SET_FILESYSTEM = 'utf8';
SET CHARACTER_SET_SERVER = 'utf8';
SET CHARACTER_SET_DATABASE = 'utf8';

CREATE TABLE IF NOT EXISTS writer
(
  id_writer INT(11) AUTO_INCREMENT NOT NULL,
  name VARCHAR(255),
  patronymic VARCHAR(255) DEFAULT NULL,
  surname VARCHAR(255),
  intoduction_content TEXT,
  content MEDIUMTEXT,
  card_description TEXT,
  country VARCHAR(255),
  century VARCHAR(255),
  quote VARCHAR(255),
  PRIMARY KEY (id_writer)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS century
(
  id_century INT(11) AUTO_INCREMENT NOT NULL,
  name_century VARCHAR(255),
  PRIMARY KEY (id_century)
) ENGINE=InnoDB;

ALTER TABLE writer
    ADD FOREIGN KEY (id_country) REFERENCES country (id_country);

ALTER TABLE writer
    ADD FOREIGN KEY (id_genre) REFERENCES genre (id_genre);

SELECT *
FROM writer;

UPDATE writer
SET years_of_life = '21 июля 1924 - 43 мая 1934'
WHERE id_writer = 2;

ALTER TABLE writer
    ADD COLUMN date_of_birth DATE;

ALTER TABLE writer
    ADD COLUMN years_of_life VARCHAR(255);

ALTER TABLE writer
    ADD COLUMN id_genre INT(11);

ALTER TABLE writer
    ADD COLUMN date_of_death DATE;

ALTER TABLE writer
    ADD COLUMN id_century INT(11);

SELECT * FROM century;

SELECT *
FROM writer;
/* нужно добавить внешние ключи для писателя и модифайнуть страну писателя */

ALTER TABLE writer
DROP COLUMN country;

ALTER TABLE writer
    DROP COLUMN century;

ALTER TABLE writer
  DROP COLUMN id_genre;

SELECT * FROM genre_writer;


ALTER TABLE writer
    ADD COLUMN id_country INT(11);

SELECT name_genre FROM genre;


CREATE TABLE IF NOT EXISTS country
(
  id_country INT(11) AUTO_INCREMENT NOT NULL,
  name VARCHAR(255),
  PRIMARY KEY (id_country)
) ENGINE=InnoDB;


ALTER TABLE writer
    ADD COLUMN famous_book TEXT;

CREATE TABLE IF NOT EXISTS genre_writer
(
  id_genre_writer INT(11) AUTO_INCREMENT NOT NULL,
  id_writer INT(11),
  id_genre INT(11),
  PRIMARY KEY (id_genre_writer),
  FOREIGN KEY (id_writer) REFERENCES writer(id_writer),
  FOREIGN KEY (id_genre) REFERENCES genre(id_genre)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS genre
(
  id_genre INT(11) AUTO_INCREMENT NOT NULL,
  name_genre VARCHAR(255),
  PRIMARY KEY (id_genre)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS writer_picture
(
  id_writer_picture INT(11) AUTO_INCREMENT NOT NULL,
  id_writer INT(11),
  filename VARCHAR(255),
  PRIMARY KEY (id_writer_picture),
  FOREIGN KEY (id_writer) REFERENCES writer(id_writer)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS writer_signature
(
  id_writer_signature INT(11) AUTO_INCREMENT NOT NULL,
  id_writer INT(11),
  filename VARCHAR(255),
  PRIMARY KEY (id_writer_signature),
  FOREIGN KEY (id_writer) REFERENCES writer(id_writer)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS main_writer_picture
(
  id_main_writer_picture INT(11) AUTO_INCREMENT NOT NULL,
  id_writer INT(11),
  filename VARCHAR(255),
  PRIMARY KEY(id_main_writer_picture),
  FOREIGN KEY (id_writer) REFERENCES writer(id_writer)
) ENGINE=InnoDB;