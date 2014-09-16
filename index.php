<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-3 - Andmetüübid</title>
</head>

<body>
	<h2>Muutujad</h2>
		<?php
			$variable = 10;
			echo $variable;
			
			// Lisan veebilehitsejas parema loetavuse saamiseks reamurdmise elemendi:
			echo "<br>";
			$variable = 20;
			echo $variable;
			echo "<br>";
			
			// Selles näites on "Hello world!" string, mis koosneb 12 tähemärgist (ka tühik ning hüüumärk on tähemärgid):
			echo "Hello world!";
		?>
	
	<h2>Stringid</h2>
		<?php
			echo "let's go";
			echo "<br>";

				$variable = 24;
			echo $variable;
				$variable = 26;
			echo $variable;
		?>
		
	<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
		<?php
			$student1 = "Merili";
			$student2 = "Maile";
			$student3 = "Triin";
			$student4 = "Marge";
			$student5 = "Marko";
		?>
		
	<ul>
		<?php
			echo "<li>" . $student1 . "</li>";
			echo "<li>" . $student2 . "</li>";
			echo "<li>" . $student3 . "</li>";
			echo "<li>" . $student4 . "</li>";
			echo "<li>" . $student5 . "</li>";
		?>
	</ul>
	
		<?php
			$firstName = "Veronika";
			$lastName = "Bondar";
			$fullName = "$firstName $lastName";
		?>
		<?php 
			echo $fullName;
		?>
		
		<?php 
			echo "<br>";
			$test = "Testime";
			echo "$test kas interpolatsioon töötab";
		?>
</body>
</html>