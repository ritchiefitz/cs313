<?php
	if (!isset($error)) {
		$error = "";
	}
?>
<div class="login-wrapper">
	<h1 class="login-logo">Iris</h1>
	<h2 class="error-message"><?php echo $error; ?></h2>
	<div class="half-side">
		<h2>Login</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" required>
			</div>
			<input type="hidden" name="login">
			<input type="submit" class="btn btn-default" value="Login">
		</form>
	</div>
	<div class="half-side">
		<h2>Register</h2>
		<form id="register" action="" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="first_name" placeholder="First Name" required>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" required>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Email" required>
			</div>
			<div class="form-group password">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
			</div>
			<div class="form-group password">
				<input type="password" class="form-control" id="verify_pwd" name="verify_pwd" placeholder="Verify Password" required>
			</div>
			<input type="hidden" name="register">
			<input type="submit" class="btn btn-default" value="Register">
		</form>
	</div>
</div>

<?php
	$iris = new IrisController(null);

	if (isset($_POST['login']) && ($error == "")) {
		$username = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');

		$user = $iris->validateUser($username, $password);

		if ($user) {
			$_SESSION['logged-in'] = true;
			$_SESSION['user'] = $user;
			$_SESSION['username'] = $user['username'];
			$_SESSION['first_name'] = $user['first_name'];
			$_SESSION['last_name'] = $user['last_name'];
			$_SESSION['email'] = $user['email'];

			header("Location: /assignments/iris/");
		}
		else {
			$error = "Login Failed";
			include("login.php");
		}

	}

	if (isset($_POST['register']) && ($error == "")) {
		$first_name = filter_input(INPUT_POST, 'first_name');
		$last_name = filter_input(INPUT_POST, 'last_name');
		$username = filter_input(INPUT_POST, 'username');
		$email = filter_input(INPUT_POST, 'email');
		$password = filter_input(INPUT_POST, 'password');

		echo $first_name . "<br>";
		echo $last_name . "<br>";
		echo $username . "<br>";
		echo $email . "<br>";
		echo $password . "<br>";

		$user = $iris->registerUser($first_name, $last_name, $username, $email, $password);

		if ($user) {
			$_SESSION['logged-in'] = true;
			$_SESSION['user'] = $user;
			$_SESSION['username'] = $user['username'];
			$_SESSION['first_name'] = $user['first_name'];
			$_SESSION['last_name'] = $user['last_name'];
			$_SESSION['email'] = $user['email'];

			header("Location: /assignments/iris/");
		}
		else {
			$error = "Registration Failed";
			include("login.php");
		}
	}
?>