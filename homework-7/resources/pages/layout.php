<?php
/** @var array $section */
/** @var array $genres */
/** @var string $content */
/** @var string $currentPage */

require_once "./config/app.php";
require_once "./data/movies.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $section['title'] ?></title>
	<link rel="stylesheet" href="./resources/css/style.css">
	<link rel="stylesheet" href="./resources/css/reset.css">
</head>
<body>
<div class="wrapper">
	<div class="sidebar">
		<div class="logo-bitflix"></div>
		<ul class="menu">
			<?php
			foreach ($section['sidebar'] as $key => $value): ?>
				<li class="menu-item">
					<a class="menu-item-a<?= $currentPage === $key ? "-active"
						: "" ?>" href="main.php?sidebar=<?= $key ?>"><?= $value ?></a>
				</li>
			<?php
			endforeach; ?>
		</ul>
	</div>
	<div class="container">
		<div class="header">
			<div class="div-search">
				<div class="icon-search"></div>
				<label>
					<input type="text" class="search" placeholder="Поиск по каталогу...">
				</label>
				<input type="button" value="искать" class="button-search">
				<input type="button" value="добавить фильм" class="button-add-movie">
			</div>
		</div>
		<div class="content">
			<?= $content ?>
		</div>
	</div>
</div>
</body>
</html>

