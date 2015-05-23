<?php
	session_start();

	define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/assignments/iris/");
	include (SITE_ROOT . "modules/controller.php");

	$iris = new IrisController($_SESSION['user']);

	$search = filter_input(INPUT_POST, 'q');
	$journal = filter_input(INPUT_POST, 'jid');

	echo $iris->searchContent($search, $journal);

?>

