<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Popov Leonid</title>
	</head>

	<body>
		<form method="post">
			<textarea name="textInput" rows="10" cols="30" placeholder="Напишите что-нибудь (пожалуйста)"></textarea><br>
			<button type="submit">Посчитать</button>
		</form>
	</body>
</html>


<?php
	$text = $_POST['textInput'];
	$vowels = [ "а", "о", "э", "е", "и", "ы", "у", "ё", "ю", "я" ];
	$result = 0;

	foreach ( mb_str_split($text) as $char ) {
		if( in_array($char, $vowels) ) {
			$result++;
		}
	}

	echo "Количество гласных: " . $result . ", негласных: " . mb_strlen($text) - $result . "\n";
?>

