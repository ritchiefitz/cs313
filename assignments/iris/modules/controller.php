<?php

include(SITE_ROOT . "modules/model.php");
include(SITE_ROOT . "modules/view.php");

class IrisController {
	private $model;
	private $view;
	private $user;

	public function __construct($user) {
		$this->model = new IrisModel();
		$this->view = new IrisView();
		$this->user = $user;
	}

	public function setUser($user) {
		$this->user = $user;
	}

	public function getUsers() {
		return $this->model->getUsers();
	}

	public function getJournals() {
		return $this->model->getJournals($this->user['uid']);
	}

	public function getPages($jid) {
		return $this->model->getPages($this->user['uid'], $jid);
	}

	public function getUser() {
		return $this->user;
	}

	public function getJournal($jid) {
		return $this->model->getJournal($this->user['uid'], $jid);
	}

	public function getPage($jid, $pid) {
		return $this->model->getPage($this->user['uid'], $jid, $pid);
	}

	public function validateUser($username, $password) {
		$valid_user = $this->model->validateUser($username, $password);
		$this->user = $valid_user;
		return $valid_user;
	}

	public function displayJournalSidebar() {
		$this->view->displayJournalSidebar($this->getJournals());
	}

	public function displayJournals() {
		$this->view->displayJournals($this->getJournals());
	}

	public function displayJournal($jid) {
		$this->view->displayJournal($this->getJournal($jid), $this->getPages($jid));
	}

	public function searchContent($search, $journal) {
		$matching_pages = $this->model->searchContent($this->user['uid'], $search, $journal);
		return $this->view->displaySearchResults($matching_pages);
	}
}
?>