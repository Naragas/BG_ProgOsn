<meta charset="utf-8">
<script type="text/javascript">
	var firstUserAnswer = 0;
	var secondUserAnswer = 0;
	var tryCount = 0;
	var answer = parseInt(Math.random() * 100);
	alert("Угадайте число от 0 до 100\nЧтобы сдаться введите 111 в поле ответа, чтобы продолжить нажмите Enter");
	
	 while(true){
	 	firstUserAnswer = +prompt("Чтобы сдаться и окончить игру напишите 111\nВариант ответа Игрока №1:");
	 	if(firstUserAnswer == 111){
	 		alert("Игрок№1 сдается, победил Игрок№2!!!\nЧисло попыток: " + tryCount + "\nПравильный ответ: " + answer);
	 		break;
	 	}
	 	
	 	tryCount++;

		secondUserAnswer = +prompt("Чтобы сдаться и окончить игру напишите 111\nВариант ответа Игрока №2:");
		if(secondUserAnswer == 111){
			alert("Игрок№2 сдается, победил Игрок№1!!!\nЧисло попыток: " + tryCount + "\nПравильный ответ: " + answer);
			break;
		}

		if(firstUserAnswer == answer){
			alert("Поздравляю Игрок№1 угадал число.\nЧисло попыток: " + tryCount);
			break;
		}else if(firstUserAnswer > answer){
			alert("Игрок №1 ввел слишком большое число.");
		}else if(firstUserAnswer < answer){
			alert("Игрок №1 ввел слишком маленькое число.");
		}
		if (secondUserAnswer == answer) {
			alert("Поздравляю Игрок№2 угадал число.\nЧисло попыток: " + tryCount);
			break;
		}else if(secondUserAnswer > answer){
			alert("Игрок №2 ввел слишком большое число.");
		}else if(secondUserAnswer < answer){
			alert("Игрок №2 ввел слишком маленькое число.");
		}
		

	}

</script>