<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php 
	include "menu.php";
?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.jpg">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Иван Сахаров</i>. Я совсем недавно начал программировать, однако уже написал свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал: <br>
			
			<a href="passw-generator.php">Генератор паролей</a>
			<a href="guess.php">Угадайка</a>
			<a href="guess-2.php">Угадайка мультиплеер</a>
			<a href="puzzle.php">Загадки</a>

			</p>
		</div>
	</div>
</div>
<?php 
	include "footer.php";
?>


</body>
</html>