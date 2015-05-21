<?php
session_start();

define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/assignments/iris/");
include (SITE_ROOT . "modules/header.php");

$_SESSION['logged-in'] = true;

if ($_SESSION['logged-in'] == true) {
	include (SITE_ROOT . "modules/controller.php");
	include (SITE_ROOT . "pages/user-home.php");
}
?>

<?php include (SITE_ROOT . "modules/footer.php"); ?>