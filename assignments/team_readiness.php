<!DOCTYPE html>
<html>
<head>
	<title>Team Readiness</title>
</head>
<body>
	<?php
		$name = $nameErr = null;
		$email = $emailErr = null;
		$major = $majorErr = null;
		$places = $placesErr = null;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "Name is required!";
			}
			elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
				$nameErr = "Name must only contain letters and white space!";
			}
			else {
				$name = test_input($_POST["name"]);
			}

			if (empty($_POST["email"])) {
				$emailErr = "Email is required!";
			}
			elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format"; 
			}
			else {
				$email = test_input($_POST["email"]);
			}

			if (empty($_POST["major"])) {
				$majorErr = "Major is required!";
			}
			else {
				$major = test_input($_POST["major"]);
			}

			if (empty($_POST["places"])) {
				$placesErr = "Places is required!";
			}
			else {
				$places = $_POST["places"];
			}

			if (empty($_POST["comment"])) {
				$comment = "";
			}
			else {
				$comment = test_input($_POST["comment"]);
			}
		}

		function test_input($input) {
			$input = trim($input);
			$input = stripslashes($input);
			$input = htmlspecialchars($input);
			return $input;
		}

		if (isset($name) && isset($email) && isset($major) && isset($places)) {
			?>

			<p>Name: <?php echo $name; ?></p>
			<p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
			<p>Major: <?php echo $major; ?></p>
			<p>Places:<br> <?php echo implode("<br>", $places); ?></p>
			<p>Comments:<br> <?php echo $comment; ?></p>

			<?php
		}
		else {
	?>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<label for="name">Name: </label>
		<input type="text" name="name" id="name" value="<?php echo $name; ?>">
		<span class="error"><?php echo $nameErr; ?></span>
		<br>
		<br>
		<label for="email">E-mail: </label>
		<input type="email" name="email" id="email" value="<?php echo $email; ?>">
		<span class="error"><?php echo $emailErr; ?></span>
		<br>
		<br>
		<label for="major">Major: </label>
		<span class="error"><?php echo $majorErr; ?></span>
		<br>
		<input type="radio" name="major" value="Computer Science" 
		<?php if (isset($major) && $major == "Computer Science") echo "checked"; ?>> Computer Science <br>
		<input type="radio" name="major" value="Web Development and Design" 
		<?php if (isset($major) && $major == "Web Development and Design") echo "checked"; ?>> Web Development and Design <br>
		<input type="radio" name="major" value="Computer information Technology" 
		<?php if (isset($major) && $major == "Computer information Technology") echo "checked"; ?>> Computer information Technology <br>
		<input type="radio" name="major" value="Computer Engineering" 
		<?php if (isset($major) && $major == "Computer Engineering") echo "checked"; ?>> Computer Engineering <br>
		<br>
		<br>
		<label for="major">Places that you have visited: </label>
		<span class="error"><?php echo $nameErr; ?></span>
		<br>
		<input type="checkbox" name="places[]" value="North America" 
		<?php if (in_array("North America", $places)) echo "checked"; ?>> North America <br>
		<input type="checkbox" name="places[]" value="South America" 
		<?php if (in_array("South America", $places)) echo "checked"; ?>> South America <br>
		<input type="checkbox" name="places[]" value="Europe" 
		<?php if (in_array("Europe", $places)) echo "checked"; ?>> Europe <br>
		<input type="checkbox" name="places[]" value="Asia" 
		<?php if (in_array("Asia", $places)) echo "checked"; ?>> Asia <br>
		<input type="checkbox" name="places[]" value="Australia" 
		<?php if (in_array("Australia", $places)) echo "checked"; ?>> Australia <br>
		<input type="checkbox" name="places[]" value="Africa" 
		<?php if (in_array("Africa", $places)) echo "checked"; ?>> Africa <br>
		<input type="checkbox" name="places[]" value="Antartica" 
		<?php if (in_array("Antartica", $places)) echo "checked"; ?>> Antartica <br>
		<br>
		<br>
		<label for="comment">Comment</label>
		<br>
		<textarea name="comment" id="comment" cols="30" rows="10"><?php echo $comment; ?></textarea>
		<br>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php 
		}
	?>
</body>
</html>