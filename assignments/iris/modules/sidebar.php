<?php
	$iris = new IrisController($_SESSION['user']);
?>
<div class="sidebar">
	<h2>Account</h2>
	<ul>
		<li><a href="/assignments/iris/pages/account_page.php">Account Details</a></li>
	</ul>
	<h2>Journals</h2>
	<ul>
		<li><a href="#">Add Journal</a></li>
	</ul>

	<?php $iris->displayJournalSidebar(); ?>
</div>