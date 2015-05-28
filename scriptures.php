<?php
	$server = '127.0.0.1';
	$database = 'scripture';
	$username = 'adminn8qcPyU';
	$password = 'En9H8_kr5X4J';
	$dsn = 'mysql:host=' . $server . ';dbname=' . $database;

	$db_connect = new PDO($dsn, $username, $password);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Scripture Test</title>
</head>
<body>
	<form action="add_scripture.php" method="post">
		<label for="book">Book</label><br>
		<input type="text" name="book"><br><br>
		<label for="chapter">Chapter</label><br>
		<input type="text" name="chapter"><br><br>
		<label for="verse">Verse</label><br>
		<input type="text" name="verse"><br><br>
		<label for="topics">Topics</label><br>
		<?php 
			$query = "SELECT * FROM topics";
			foreach($db_connect->query($query) as $row) {
				$id = $row['id'];
				$name = $row['name'];
				echo "<input type=\"checkbox\" name=\"topics[]\" value=\"$id\">$name<br>";
			}
		?>
		<input type="submit" value="Add">
	</form>
</body>
</html>