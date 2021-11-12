<?php
/** @var array $genres */
/** @var array $movies */
/** @var array $TitleName */
/** @var array $section */

require_once "./config/app.php";
require_once "./data/movies.php";
require_once "./lib/template-functions.php";

$code = $_GET['sidebar'];
echo in_array($code, $genres, true);

if (($code == 'main') or ($code == ''))
{
	$MainContent = renderTemplate("./resources/pages/main-layout.php", ['movies' => $movies,]);
}
else
{
	$MainContent = renderTemplate(
		"./resources/pages/genres-page-layout.php",
		['movies' => $movies, 'genres' => $genres, 'code' => $code]
	);
}

$layoutMain = renderTemplate(
	"./resources/pages/layout.php",
	[
		'content' => $MainContent,
		'TitleName' => $TitleName,
		'section' => $section,
		'genres' => $genres,
		'currentPage' => $code,
	]
);

echo $layoutMain;
?>

