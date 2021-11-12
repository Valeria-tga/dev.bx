<?php
/** @var array $movies */
require_once "./data/movies.php";
?>

<div class="movie-list">
	<?php
	foreach ($movies as $movie): ?>
		<div class="movie-list--item">
			<div class="div-overlap">
				<input type="button" value="подробнее" class="button-detail">
				<div class="div-black"></div>
			</div>
			<div class="movie-list--item-image" style=" background-image:url(./resources/css/images_css/img/<?= $movie['id'] ?>.jpg);"></div>
			<div class="movie-list--item-head">
				<div class="movie-list--item-title"><?= $movie['title'] ?></div>
				<div class="movie-list--item-subtitle"><?= $movie['original-title'] ?></div>
			</div>
			<div class="movie-list--item-description"><?= $movie['description'] ?></div>
			<div class="movie-list--item-bottom">
				<div class="movie-list--item-icon-clock"></div>
				<div class="movie-list--item-time">163 мин. / 02:43</div>
				<div class="movie-list--item-info"><?= implode(', ', $movie['genres']) ?></div>
			</div>
		</div>
	<?php
	endforeach; ?>
</div>