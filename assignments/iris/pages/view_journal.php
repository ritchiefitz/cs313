<?php
	include ($_SERVER['DOCUMENT_ROOT'] . "/assignments/iris/modules/header.php");

	if (isset($_SESSION['logged-in'])) {
		$iris = new IrisController($_SESSION['user']);

		$journal_id = filter_input(INPUT_GET, 'jid', FILTER_VALIDATE_INT);
?>

<div class="row text-center">
	<div class="col-sm-9 text-left">
		<?php $iris->displayJournal($journal_id); ?>
	</div>
	<div class="col-sm-3">
		<div class="sidebar">
			<h2>Journal Controls</h2>
			<ul>
				<li>Right Arrow: Next Page</li>
				<li>Left Arrow: Previous Page</li>
			</ul>
			<h2>Search Journal</h2>
			<form id="search-form" action="">
				<div class="form-group">
					<input id="q" type="text" class="form-control" name="q">
				</div>
				<input id="jid" type="hidden" name="jid" value="<?php echo $journal_id; ?>">
				<input id="search" type="button" class="btn btn-default" value="Search">
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
?>
<?php include (SITE_ROOT . "modules/footer.php"); ?>