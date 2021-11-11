#1 Вывести список фильмов, в которых снимались одновременно Арнольд Шварценеггер и Линда Хэмилтон
SELECT m.ID,
       mt.TITLE,
       d.NAME
FROM movie m
	     INNER JOIN movie_title mt on m.ID = mt.MOVIE_ID
	     INNER JOIN director d ON m.DIRECTOR_ID = d.ID
WHERE MOVIE_ID IN (SELECT ma.MOVIE_ID
                   FROM movie_actor ma
	                        INNER JOIN actor a ON ma.ACTOR_ID = a.ID
                   WHERE a.ID = '1'
	                  OR a.ID = '3'
)
  AND LANGUAGE_ID = 'ru';

#2. Вывести список названий фильмов на английском языке с "откатом" на русский, в случае если название на английском не задано.
#Не получилось придумать как сделать откат, думала использовать IFNUL(), но мне кажется, тут нужет другой подход.
SELECT mt.TITLE
FROM movie m
	     LEFT JOIN movie_title mt on m.ID = mt.MOVIE_ID and LANGUAGE_ID = 'en';

#3 Вывести самый длительный фильм Джеймса Кэмерона
SELECT m.ID, mt.title, MAX(m.LENGTH) AS MAX_LENGHT_MOVIE
FROM movie m
	     INNER JOIN director d ON m.DIRECTOR_ID = d.ID
	     INNER JOIN movie_title mt on m.ID = mt.MOVIE_ID
WHERE LANGUAGE_ID = 'ru'
  AND d.NAME = 'Джеймс Кэмерон';

#4 Вывести список фильмов с названием, сокращенным до 10 символов. Если название короче 10 символов - оставляем как есть.
# Если длиннее -сокращаем до 10 символов и добавляем многоточие.
SELECT m.ID, INSERT(LEFT(mt.TITLE, 10), 11, 3, '...') AS ABBREVIATED_NAME
FROM movie m
	     INNER JOIN movie_title mt on m.ID = mt.MOVIE_ID;

#5. Вывести количество фильмов, в которых снимался каждый актер
SELECT a.NAME, COUNT(m.ID) AS COUNT_MOVIES
FROM movie m
	     INNER JOIN movie_actor ma on m.ID = ma.MOVIE_ID
	     INNER JOIN actor a on ma.ACTOR_ID = a.ID
GROUP BY a.NAME;

#6. Вывести жанры, в которых никогда не снимался Арнольд Шварценеггер
SELECT g.ID, g.NAME
FROM genre g
WHERE g.ID NOT IN (SELECT DISTINCT mg.GENRE_ID
                   FROM movie_genre mg
                   WHERE mg.MOVIE_ID IN (SELECT m.ID
                                         FROM movie m
                                         WHERE m.ID IN
                                               (SELECT ma.MOVIE_ID FROM movie_actor ma WHERE ma.ACTOR_ID = '1')));

#7 Вывести список фильмов, у которых больше 3-ех жанров.
SELECT MOVIE_ID, TITLE
FROM movie_title
WHERE MOVIE_ID IN (SELECT MOVIE_ID FROM movie_genre GROUP BY MOVIE_ID HAVING COUNT(movie_genre.GENRE_ID) > '3')
  AND LANGUAGE_ID = 'ru';
