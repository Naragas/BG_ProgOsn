<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Игра в Загадки</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var score = 0;

	</script>
</head>
<body>

<div class="content">
	<?php 
	include "menu.php";
	?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

				<?php 

					if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3']) && isset($_GET['userAnswer4'])){
						$userAnswer = mb_strtolower($_GET["userAnswer1"]);
						$score = 0;
						if($userAnswer == "ножницы" || $userAnswer == "секатор"){
							$score++;
						}
						
						$userAnswer = mb_strtolower($_GET["userAnswer2"]);
						if($userAnswer == "лампа" || $userAnswer == "лампочка"){
							$score++;
						}

						$userAnswer = mb_strtolower($_GET["userAnswer3"]);;
						if($userAnswer == "хлеб" || $userAnswer == "хлебушек"){
							$score++;
						}

						$userAnswer = mb_strtolower($_GET["userAnswer4"]);;
						if($userAnswer == "ёлка" || $userAnswer == "ель"){
							$score++;
						}

						echo "Верных ответов: " . $score ;
					}
				?>	

				<form method="GET">	
					<p>Два кольца, два конца, а по середине гвоздик?</p>
					<input type="text" name="userAnswer1">

					<p>Висит грушка - нельзя скушать?</p>
					<input type="text" name="userAnswer2">

					<p>Что всему голова?</p>
					<input type="text" name="userAnswer3">

					<p>Зимой и летом одним цветом?</p>
					<input type="text" name="userAnswer4">

					<br>
					<input type="submit" value="Ответить" name="">
					
				</form>

			</div>

        </div>

    </div>

</div>

	

</div>
<?php 
	include "footer.php";
?>


</body>
</html>