<?php
	include ($_SERVER['DOCUMENT_ROOT'] . "/assignments/iris/modules/header.php");

	if (isset($_SESSION['logged-in'])) {
		$iris = new IrisController($_SESSION['user']);
?>

<div class="row">
	<div class="col-sm-2">
		<?php include(SITE_ROOT . "modules/sidebar.php"); ?>
	</div>
	<div class="col-sm-10">
		<div class="content">
			<h1>Account Details</h1>
			<div class="account-info">
				<label for="">First Name:</label>
				<span class="first-name"><?php echo $_SESSION['first_name']; ?></span>
				<br>
				<label for="">Last Name:</label>
				<span class="last-name"><?php echo $_SESSION['last_name']; ?></span>
				<br>
				<label for="">Username:</label>
				<span class="username"><?php echo $_SESSION['username']; ?></span>
				<br>
				<label for="">E-mail:</label>
				<span class="email"><?php echo $_SESSION['email']; ?></span>
				<br>
			</div>
		</div>
	</div>
</div>

<?php
	}
	else {
		$openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST');
		$url = ($openShiftVar) ? 'http://php-ritchiefitz.rhcloud.com/assignments/iris/' : 'http://local.cs313.com/assignments/iris/';
		header("Location: $url");
	}
?>
<?php include (SITE_ROOT . "modules/footer.php"); ?>