<?php
session_start();

define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/assignments/iris/");
include (SITE_ROOT . "modules/header.php");

$_SESSION['logged-in'] = true;

if ($_SESSION['logged-in'] == true):
	include (SITE_ROOT . "modules/controller.php");
	$iris = new IrisController();
	$user = $iris->getUser(1);
	$iris->setUser($user);

	$journal_id = filter_input(INPUT_GET, 'jid', FILTER_VALIDATE_INT);
?>

<div class="row text-center">
	<div class="col-sm-10 text-left">
		<?php $iris->displayJournal($journal_id); ?>
	</div>
	<div class="col-sm-2">
		<div class="sidebar">
			<h2>Journal Controls</h2>
			<ul>
				<li>Right Arrow: Next Page</li>
				<li>Left Arrow: Previous Page</li>
			</ul>
		</div>
	</div>
</div>

<?php endif;?>
<?php include (SITE_ROOT . "modules/footer.php"); ?>