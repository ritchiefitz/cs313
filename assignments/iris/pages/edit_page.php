<?php
	include ($_SERVER['DOCUMENT_ROOT'] . "/assignments/iris/modules/header.php");

	if (isset($_SESSION['logged-in'])) {
		$iris = new IrisController($_SESSION['user']);

		$journal_id = filter_input(INPUT_GET, 'jid', FILTER_VALIDATE_INT);
		$page_id = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT);

		$page = $iris->getPage($page_id);
?>

<div class="row">
	<div class="col-sm-2">
		<?php include(SITE_ROOT . "modules/sidebar.php"); ?>
	</div>
	<div class="col-sm-10 text-center">
		<div class="custom-page">
			<form action="" method="post">
				<div class="form-group">
					<input id="page-title" name="page-title" type="text" class="form-control"
					placeholder="Page Title" value="<?php echo $page['title']; ?>" maxlength="20" required>
				</div>
				<div class="form-group">
					<input id="page-date" name="page-date" type="text" class="form-control"
					pattern="\d{4}-\d{2}-\d{2}" placeholder="Date YYYY-MM-DD" value="<?php echo $page['event_date']; ?>" required>
				</div>
				<div class="form-group">
					<textarea name="page-content" id="page-content" placeholder="Page Content" maxlength="1551" required><?php
						echo str_replace('<br />', "\n", $page['content']);
					?></textarea>
				</div>
				<input type="hidden" name="pid" value="<?php echo $page_id; ?>">
				<input type="hidden" name="edit_page" value="sending">
				<input type="submit" class="btn btn-default" value="Update Page">
			</form>
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

	if (isset($_POST['edit_page'])) {
		$page_id = filter_input(INPUT_POST, 'pid', FILTER_VALIDATE_INT);
		$page_title = filter_input(INPUT_POST, 'page-title');
		$page_date = filter_input(INPUT_POST, 'page-date');
		$page_content = filter_input(INPUT_POST, 'page-content');

		$page_content = str_replace("\n", '<br />', $page_content);

		$iris->updatePage($page_id, $page_title, $page_date, $page_content);

		$page_num = $page['page_number'];
		header("Location: /assignments/iris/pages/view_journal.php?jid=$journal_id&pn=$page_num");
	}
?>
<?php include (SITE_ROOT . "modules/footer.php"); ?>