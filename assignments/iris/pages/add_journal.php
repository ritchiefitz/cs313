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
			<h1>Add Journal</h1>
			<form action="" method="post">
				<input type="text" name="title" class="form-control form-control-inline" placeholder="Journal Title" required>
				<input type="hidden" name="add_journal" value="true">
				<input type="submit" class="btn btn-default" value="Submit">
			</form>
		</div>
	</div>
</div>

<?php
	}
	else {
		header("Location: /assignments/iris/");
	}

	if (isset($_POST['add_journal'])) {
		$title = filter_input(INPUT_POST, 'title');
		$iris->addJournal($title);
		header("Location: /assignments/iris/");
	}
?>
<?php include (SITE_ROOT . "modules/footer.php"); ?>