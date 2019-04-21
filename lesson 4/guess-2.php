<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Угадайка мультиплеер</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 3;
		var minRange = 0;
		var maxRange = 100;

		function readInt(uAnswer){
			return +uAnswer.value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function answerCheck(value1, value2){
			if(value1 == value2 && value1 == answer ){
				hide("game");
				return ("<b>Поздравляю, оба игрока угадали! правильный ответ: " + answer);
			} else if(value1 == answer){
				hide("game");
				return ("<b>Победил игрок номер 1! правильный ответ: " + answer);
			} else if(value2 == answer){
				hide("game");
				return ("<b>Победил игрок номер 2! правильный ответ: " + answer);
			} else if(answer < Math.min(value1, value2)){
				maxRange = Math.min(value1, value2);
				//return ("ответ в диапазоне от " + minRange + " до " + maxRange);
			} else if(answer > Math.max(value1, value2)){
				minRange = Math.max(value1, value2);
				//return ("ответ в диапазоне от " + minRange + " до 100");
			} else{
				minRange = Math.min(value1, value2);
				maxRange = Math.max(value1, value2);
				
			}
				return ("ответ между " + minRange + " и " + maxRange);
			
		}

		function guess(){
			if (tryCount<= 5) {	
				tryCount++;
				var userAnswer1 = readInt(document.getElementById("userAnswer1"));
				var userAnswer2 = readInt(document.getElementById("userAnswer2"));
				write(answerCheck(userAnswer1,userAnswer2));
				
			} else{
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("game");
			
			}

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

			<h1>Игра угадайка мультиплеер</h1>

			<div class="box">
				
				<p id="info">Угадайте число от 0 до 100</p>
				<div class="box" id="game">
					<p id="info">ответ игрока номер 1</p>
					<input type="text" id="userAnswer1">
					<br>
					<p id="info">ответ игрока номер 2</p>
					<input type="text" id="userAnswer2">
					<br>
					<a href="#" onClick="guess();" id="button">Начать</a>
				</div>				
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