<?php
/** @var array $genres */
/** @var array $movies */
/** @var array $TitleName */
/** @var array $section */

require_once "./config/app.php";
require_once "./data/movies.php";
require_once "./lib/template-functions.php";

$MainContent = renderTemplate("./resources/pages/favourites-layout.php");

$layoutMain = renderTemplate("./resources/pages/layout.php", [
	'content' => $MainContent,
	'TitleName' => $TitleName,
	'section' => $section,
	'genres' => $genres,
]);

echo $layoutMain;
?>


