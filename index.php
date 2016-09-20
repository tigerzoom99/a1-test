<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP by Tyler</title>

	</head>
	<style>
		body {
			background-color: #99ffff;
		}

		.center {
			text-align: center;
		}
	</style>
	<body>
		<h1 class="center">Welcome to my PHP web page</h1>

		<form method="GET">
			<p>
				enter name
			</p>
			<input type="text" name="person">
			<p>
				enter age
			</p>
			<input type="text" name="age">
			<p>
				enter grade
			</p>
			<input type="text" name="grade">
			<button>
				submit
			</button>
		</form>
		<?php

		$name = $_GET['person'];
		$grade = $_GET['grade'];
		$age = $_GET['age'];
		echo "my name is " . $name . ", I am " . $age . " years old, I am in grade " . $grade;
		?>
	</body>
</html>