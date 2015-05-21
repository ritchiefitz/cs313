<?php
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
			<h1>Welcome <?php echo $user['first_name']; ?></h1>
			<p>At Iris we hope to give you an amazing experience.</p>
			<p>A lot of us like keeping a journal, but why write when you can type?</p>
			<p>Why spend awhile searching through all your pages, when you can just search?</p>
			<p>Hoping to give you the advantage of both worlds by printing your online journal.</p>
		</div>
	</div>
</div>