<?php

class IrisView {
	public function displayJournalSidebar($journals) {
		foreach ($journals as $journal) {
			echo '<h2>'.$journal['title'].'</h2>';
			echo '<ul>';
			// echo '<li><a href="/assignments/iris/pages/add_page.php?jid='.$journal['jid'].'">Add Page</a></li>';
			// echo '<li><a href="/assignments/iris/pages/edit_pages.php?jid='.$journal['jid'].'">Edit Pages</a></li>';
			echo '<li><a href="/assignments/iris/pages/view_journal.php?jid='.$journal['jid'].'">Read Journal</a></li>';
			// echo '<li><a href="/assignments/iris/pages/edit_journal.php?jid='.$journal['jid'].'">Edit Journal</a></li>';
			echo '</ul>';
		}
	}

	public function displayJournals($journals) {

		echo '<div class="journals">';
		foreach ($journals as $journal) {
			echo '<a class="journal" href="/assignments/iris/pages/view_journal.php?jid='.$journal['jid'].'">';
			echo '<div class="title">'.$journal['title'].'</div>';
			echo '</a>';
		}
		echo '</div>';
	}

	public function displayJournal($journal, $pages) {
		
		echo '<div id="flipbook">';
		echo '<div class="hard">';
		echo '<div class="title">'.$journal['title'].'</div>';
		echo '</div>';
		echo '<div class="hard"></div>';

		foreach ($pages as $page) {
			// $date = date_create_from_format('j-M-Y', );
			$date = DateTime::createFromFormat('Y-m-d', $page['event_date']);

			echo '<div>';
			echo '<div class="journal-page">';
			echo '<div class="title">'.$page['title'].'</div>';
			echo '<div class="date">'.$date->format('F j, Y').'</div>';
			echo '<div class="page-number">'.$page['page_number'].'</div>';
			echo '<div class="journal-content">'.$page['content'].'</div>';
			echo '</div> <!-- End of Journal Page -->';
			echo '</div> <!-- End of DIV -->';
		}

		echo '<div class="hard"></div>';
		echo '<div class="hard last"></div>';
		echo '</div> <!-- End of flipbook -->';
	}
}

?>