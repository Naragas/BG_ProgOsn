<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var score = 0;

		function checkAnswer(inputId, answers){
			var userAnswer = document.getElementById(inputId).value;
			userAnswer = userAnswer.toLowerCase();
			for(var i = 0; i < answers.length; i++){
				if(userAnswer == answers[i]){
					score++;
					break;
				}
			}
		}
		
		function checkAnswers() {

			checkAnswer("userAnswer1", ["ножницы", "секатор"]);
			checkAnswer("userAnswer2", ["лампа", "лампочка"]);
			checkAnswer("userAnswer3", ["хлеб", "хлебушек"]);
			checkAnswer("userAnswer4", ["ёлка", "ель"]);


			alert("Вы отгадали " + score + " загадок");
			score = 0;
		}

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
						$userAnswer = $_GET["userAnswer1"];
						$score = 0;
						if($userAnswer == "ножницы" || $userAnswer == "секатор"){
							$score++;
						}
						
						$userAnswer = $_GET["userAnswer2"];
						if($userAnswer == "лампа" || $userAnswer == "лампочка"){
							$score++;
						}

						$userAnswer = $_GET["userAnswer3"];
						if($userAnswer == "хлеб" || $userAnswer == "хлебушек"){
							$score++;
						}

						$userAnswer = $_GET["userAnswer4"];
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