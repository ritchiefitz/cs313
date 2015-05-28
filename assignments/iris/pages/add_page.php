<?php
	include ($_SERVER['DOCUMENT_ROOT'] . "/assignments/iris/modules/header.php");

	if (isset($_SESSION['logged-in'])) {
		$iris = new IrisController($_SESSION['user']);

		$journal_id = filter_input(INPUT_GET, 'jid', FILTER_VALIDATE_INT);
?>

<div class="row">
	<div class="col-sm-2">
		<?php include(SITE_ROOT . "modules/sidebar.php"); ?>
	</div>
	<div class="col-sm-10 text-center">
		<div class="custom-page">
			<form action="" method="post">
				<div class="form-group">
					<input id="page-title" name="page-title" type="text" class="form-control" placeholder="Page Title" maxlength="20" required>
				</div>
				<div class="form-group">
					<input id="page-date" name="page-date" type="text" class="form-control" pattern="\d{4}-\d{2}-\d{2}" placeholder="Date YYYY-MM-DD" value="<?php echo date("Y-m-d"); ?>" required>
				</div>
				<div class="form-group">
					<textarea name="page-content" id="page-content" placeholder="Page Content" maxlength="1551" required></textarea>
				</div>
				<input type="hidden" name="add_page" value="sending">
				<input type="submit" class="btn btn-default" value="Add Page">
			</form>
		</div>
	</div>
</div>

<?php
	}
	else {
		header("Location: /assignments/iris/");
	}

	if (isset($_POST['add_page'])) {
		$page_title = filter_input(INPUT_POST, 'page-title');
		$page_date = filter_input(INPUT_POST, 'page-date');
		$page_content = filter_input(INPUT_POST, 'page-content');

		$page_num = $iris->addPage($journal_id, $page_title, $page_date, $page_content);

		header("Location: /assignments/iris/pages/view_journal.php?jid=$journal_id&pn=$page_num");
	}
?>
<?php include (SITE_ROOT . "modules/footer.php"); ?>