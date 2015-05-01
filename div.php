<!DOCTYPE html>
<html>
<head>
	<title>PHP TEST</title>
</head>
<body>
	<?php
		for ($i=0; $i < 5; $i++) { 
			echo "<div>This is div $i</div>";
		}

		$list = [1,2,3];
		$list["favorite"] = 4;
		$list[10] = 5;

		foreach ($list as $key => $value) {
			echo "Key: $key, Value: $value<br>";
		}

		$text = "The cat in the hat knows a lot about that.";
		$parts = explode(" ", $text);

		foreach ($parts as $part) {
			echo "$part<br>";
		}

		echo "<br><br>";

		if (!isset($_COOKIE["count"])) {
			$cookie = 1;
			setcookie("count", $cookie);
		}
		else {
			$cookie = ++$_COOKIE["count"];
			setcookie("count", $cookie);
		}

		echo "Count: " . $_COOKIE["count"];
	?>
</body>
</html>