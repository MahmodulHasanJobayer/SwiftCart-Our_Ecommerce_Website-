<!DOCTYPE html>
<html>
<head>
	<title>Reverse Words</title>
</head>
<body>
	<form method="post">
		<label for="message">Enter a message:</label><br>
		<input type="text" id="message" name="message"><br><br>
		<input type="submit" value="Submit">
	</form>
	<br>
	<?php
		if(isset($_POST['message'])){
			$message = $_POST['message'];
			$words = explode(" ", $message);
			$reverse_words = array_reverse($words);
			echo "Original message:<br>";
			echo $message . "<br><br>";
			echo "Words in original order:<br>";
			print_r($words);
			echo "<br><br>";
			echo "Words in reverse order:<br>";
			print_r($reverse_words);
		}
	?>
</body>
</html>
