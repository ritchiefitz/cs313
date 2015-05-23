<?php
	session_start();
	define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/assignments/iris/");

	include (SITE_ROOT . "modules/controller.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Iris</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="/assignments/iris/js/turn.js"></script>
	<script src="/assignments/iris/js/iris.js"></script>
	
	<link rel="stylesheet" href="/assignments/iris/css/style.css">
</head>
<body>
	<div class="container-fluid wrapper">
		<header class="row">
			<div class="col-sm-3 logo-wrapper">
				<a class="logo" href="/assignments/iris/">Iris</a>
			</div>
			<nav class="col-sm-9 text-right">
				<ul>
					<li>Where lifes greatest moments are stored.</li>
				</ul>
			</nav>
		</header>