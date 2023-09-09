<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guessing Game for arun ea2d4597</title>
</head>
<body>
	<h1>Welcome to guessing game</h1>
	<p>
		<?php 
		if (!isset($_GET['guess'])) {
			echo("Missing guess parameter");
		} elseif (strlen($_GET['guess']) < 1) {
			echo("Your guess is too short");
		} elseif (!is_numeric($_GET['guess'])) {
			echo("Your guess is not a number");
		} elseif ($_GET['guess'] < 34) {
			echo('Your guess is too low');
		} elseif ($_GET['guess'] > 34) {
			echo("Your guess is too high");
		}
		else {
			echo("Congratulations - You are right");
		}
		?>
	</p>
</body>
</html>
