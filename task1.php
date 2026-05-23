<!DOCTYPE html>
<html>
<head>
	<title>Reverse Array</title>
</head>
<body>
	<form method="post">
		<label for="names">Enter names (separated by commas):</label><br>
		<input type="text" id="names" name="names"><br><br>
		<input type="submit" value="Submit">
	</form>
	<br>
	<?php
		if(isset($_POST['names'])){
			$names = explode(",", $_POST['names']);
			$reverse_names = array_reverse($names);
			echo "Original array:<br>";
			print_r($names);
			echo "<br><br>";
			echo "Reversed array:<br>";
			print_r($reverse_names);
		}
	?>
</body>
</html>



