<?php
echo "Введите ваш возраст: ";
$age_user =  readline();
if (is_numeric($age_user))
{
	$age_user = (int)$age_user;
	get_films_by_age($age_user);
}
else
{
	echo "Нужно было ввести возраст от 0 до 100";
}

function get_films_by_age($age_user)
{
	$movies = [
		[
			"title" => "The Shawshank Redemption",
			"release_year" => 1994,
			"duration" => 144,
			"age_restriction" => 16,
			"rating" => 9.3
		],
		[
			"title" => "The Godfather",
			"release_year" => 1972,
			"duration" => 175,
			"age_restriction" => 16,
			"rating" => 9.2
		],
		[
			"title" => "The Dark Knight",
			"release_year" => 2008,
			"duration" => 152,
			"age_restriction" => 14,
			"rating" => 9.0
		],
		[
			"title" => "12 Angry Men",
			"release_year" => 1957,
			"duration" => 96,
			"age_restriction" => 16,
			"rating" => 9.0
		],
		[
			"title" => "Schindler's List",
			"release_year" => 1993,
			"duration" => 195,
			"age_restriction" => 16,
			"rating" => 8.9
		],
		[
			"title" => "The Lord of the Rings: The Return of the King",
			"release_year" => 2003,
			"duration" => 201,
			"age_restriction" => 12,
			"rating" => 8.9
		],
		[
			"title" => "Pulp Fiction",
			"release_year" => 1994,
			"duration" => 154,
			"age_restriction" => 18,
			"rating" => 8.9
		],
		[
			"title" => "Il buono, il brutto, il cattivo",
			"release_year" => 1966,
			"duration" => 161,
			"age_restriction" => 12,
			"rating" => 8.8
		],
		[
			"title" => "Fight Club",
			"release_year" => 1999,
			"duration" => 139,
			"age_restriction" => 18,
			"rating" => 8.8
		],
		[
			"title" => "Forrest Gump",
			"release_year" => 1994,
			"duration" => 142,
			"age_restriction" => 0,
			"rating" => 8.8
		],
		[
			"title" => "Inception",
			"release_year" => 2010,
			"duration" => 148,
			"age_restriction" => 12,
			"rating" => 8.8
		],
		[
			"title" => "The Matrix",
			"release_year" => 1999,
			"duration" => 136,
			"age_restriction" => 16,
			"rating" => 8.7
		],
		[
			"title" => "Goodfellas",
			"release_year" => 1990,
			"duration" => 146,
			"age_restriction" => 16,
			"rating" => 8.7
		],
		[
			"title" => "One Flew Over the Cuckoo's Nest",
			"release_year" => 1975,
			"duration" => 133,
			"age_restriction" => 16,
			"rating" => 8.7
		],
		[
			"title" => "Shichinin no samurai",
			"release_year" => 1954,
			"duration" => 227,
			"age_restriction" => 0,
			"rating" => 8.6
		],
		[
			"title" => "Se7en",
			"release_year" => 1995,
			"duration" => 127,
			"age_restriction" => 18,
			"rating" => 8.6
		],
		[
			"title" => "The Silence of the Lambs",
			"release_year" => 1991,
			"duration" => 118,
			"age_restriction" => 18,
			"rating" => 8.6
		],
		[
			"title" => "Cidade de Deus",
			"release_year" => 2002,
			"duration" => 130,
			"age_restriction" => 16,
			"rating" => 8.6
		],
		[
			"title" => "La vita e bella",
			"release_year" => 1997,
			"duration" => 116,
			"age_restriction" => 0,
			"rating" => 8.6
		],
		[
			"title" => "It's a Wonderful Life",
			"release_year" => 1946,
			"duration" => 130,
			"age_restriction" => 0,
			"rating" => 8.6
		]
	];
$movies_lenght = count( $movies);
$number=1;

for ($i=0; $i<$movies_lenght; $i++)
{
	if ($age_user >= $movies[$i]["age_restriction"])
	{
		echo $number . ". " .  $movies[$i]["title"] . " " . "(" . $movies[$i]["release_year"] . ")" . ", " . " " .  $movies[$i]["age_restriction"] . "+. " . "Rating - " .  $movies[$i]["rating"] . "\n";
		$number += 1;
	}
}}
?>