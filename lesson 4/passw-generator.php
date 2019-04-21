<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Генератор паролей</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">



		var letters = ["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","1","2","3","4","5","6","7","8","9","0","Q","W","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"];

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function getRandomNumber(max){
		return Math.round(Math.random() * max);
		}

		function readInt(){
			return +document.getElementById("userAnswer").value;
		}

		function generateText(letters, length){
		var text = "";
			for(var i = 0; i < length; i++){
				text += letters[getRandomNumber(letters.length- 1)];
			}

			return text
		}
		function generatePass(){
			var userAnswer = readInt(document.getElementById("userAnswer"));
			write(generateText(letters, userAnswer));
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

			<h1>Генератор паролей</h1>

			<div class="box">

				<p id="info">Введите число символов в пароле:</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="generatePass();" id="button">Сгенерировать пароль</a>				
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