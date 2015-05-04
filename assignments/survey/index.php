<!DOCTYPE html>
<html>
<head>
	<title>2015 Movies</title>
</head>
<body>
	<header>
		<div class="logo">Movie Survey</div>
	</header>
	<div class="content">
		<h2>Survey</h2>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<label for="gender">Gender:</label>
			<input type="radio" name="gender" value="Male"> Male <br>
			<input type="radio" name="gender" value="Female"> Female <br>
			<br>
			<label for="age">Age:</label>
			<select name="age" id="age">
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="17">17</option>
				<option value="17">17</option>
				<option value="17">17</option>
				<option value="17">17</option>
				<option value="17">17</option>
			</select>
		</form>
	</div>
	<div class="sidebar">
		
	</div>
	<footer>
		<p>Copyright &copy; <?php echo date("Y"); ?> MovieSurvey.com </p>
	</footer>
</body>
</html>