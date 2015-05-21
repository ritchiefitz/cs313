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
?>

<div class="row">
	<div class="col-sm-2">
		<?php include(SITE_ROOT . "modules/sidebar.php"); ?>
	</div>
	<div class="col-sm-10">
		<div class="content">
			<h1><?php echo $user['first_name']; ?>'s Journals</h1>
			<?php $iris->displayJournals(); ?>
		</div>
	</div>
</div>

<?php endif;?>
<?php include (SITE_ROOT . "modules/footer.php"); ?>