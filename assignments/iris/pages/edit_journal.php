<?php
	include ($_SERVER['DOCUMENT_ROOT'] . "/assignments/iris/modules/header.php");

	// Make sure user is logged in.
	if (isset($_SESSION['logged-in'])) {
		$iris = new IrisController($_SESSION['user']);

		$journal_id = filter_input(INPUT_GET, 'jid', FILTER_VALIDATE_INT);
		$journal = $iris->getJournal($journal_id);
?>

<div class="row">
	<div class="col-sm-2">
		<?php include(SITE_ROOT . "modules/sidebar.php"); ?>
	</div>
	<div class="col-sm-10">
		<div class="content">
			<h1>Edit Journal</h1>
			<form action="" method="post">
				<input type="text" name="title" class="form-control form-control-inline" placeholder="Journal Title" value="<?php echo $journal['title']; ?>" required>
				<input type="hidden" name="update_journal" value="true">
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

	if (isset($_POST['update_journal'])) {
		$title = filter_input(INPUT_POST, 'title');
		$iris->updateJournal($journal_id, $title);
		header("Location: /assignments/iris/");
	}
?>
<?php include (SITE_ROOT . "modules/footer.php"); ?>