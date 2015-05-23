<?php
	include ($_SERVER['DOCUMENT_ROOT'] . "/assignments/iris/modules/header.php");

	if (isset($_SESSION['logged-in'])) {
		include (SITE_ROOT . "pages/user-home.php");
	}
	else {
		include (SITE_ROOT . "pages/login.php");
	}
	
	include (SITE_ROOT . "modules/footer.php");
?>