CREATE TABLE language
(
	ID varchar(128) not null,
	LANGUAGE_NAME varchar(500) not null,
	PRIMARY KEY (ID)
);

CREATE TABLE movie_title
(
	MOVIE_ID int not null,
	LANGUAGE_ID varchar(128) not null,
	TITLE varchar(500) not null,

	PRIMARY KEY(MOVIE_ID, LANGUAGE_ID),
	FOREIGN KEY FK_MT_MOVIE(MOVIE_ID)
		REFERENCES movie(ID)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	FOREIGN KEY FK_MT_LANGUAGE(LANGUAGE_ID)
		REFERENCES language(ID)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
);

INSERT INTO language (ID, LANGUAGE_NAME)
VALUES ('ru', 'Русский язык'),
       ('en', 'Английский язык'),
       ('de', 'Немецкий язык');

INSERT INTO movie_title (MOVIE_ID,LANGUAGE_ID, TITLE)
SELECT ID,'ru', TITLE
FROM movie;
select * from movie_title

ALTER TABLE movie
	drop column TITLE;
