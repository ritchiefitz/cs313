<?php

include(SITE_ROOT . "modules/model.php");
include(SITE_ROOT . "modules/view.php");

class IrisController {
	private $model;
	private $view;
	private $user;

	public function __construct() {
		$this->model = new IrisModel();
		$this->view = new IrisView();
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

	public function getUser($uid) {
		return $this->model->getUser($uid);
	}

	public function getJournal($jid) {
		return $this->model->getJournal($this->user['uid'], $jid);
	}

	public function getPage($jid, $pid) {
		return $this->model->getPage($this->user['uid'], $jid, $pid);
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
}
?>