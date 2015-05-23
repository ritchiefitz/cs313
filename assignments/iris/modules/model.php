<?php

include("password.php");

class IrisModel {
	private $server;
	private $database;
	private $username;
	private $password;
	private $dsn;

	public function __construct() {
		
		$openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST');
		$this->server = ($openShiftVar) ? '127.4.175.130' : '127.0.0.1';
		$this->database = 'iris';
		$this->username = 'adminn8qcPyU';
		$this->password = 'En9H8_kr5X4J';
		$this->dsn = 'mysql:host=' . $this->server . ';dbname=' . $this->database;
	}

	private function getDBConnection() {
		$db_connection = null;
		try {
			$db_connection = new PDO($this->dsn, $this->username, $this->password);
			return $db_connection;
		} catch (Exception $e) {
			echo "Connection failed!";
		}
	}

	public function getUsers() {
		$db_conn = $this->getDBConnection();

		$pages = [];

		foreach ($db_conn->query('SELECT * FROM user') as $row) {
			$pages[] = $row;
		}

		return $pages;
	}

	public function getJournals($uid) {
		$db_conn = $this->getDBConnection();

		try {
			$query = 'SELECT * FROM journal WHERE uid = :uid';
			$statement = $db_conn->prepare($query);
			$statement->bindValue(':uid', $uid);
			$statement->execute();
			$journals = $statement->fetchAll();
			return $journals;
		} catch (Exception $e) {
			echo "An error occured while retrieving journals.";
		}
	}

	public function getPages($uid, $jid) {
		$db_conn = $this->getDBConnection();

		try {
			$query = 'SELECT * FROM page WHERE uid = :uid AND jid = :jid';
			$statement = $db_conn->prepare($query);
			$statement->bindValue(':uid', $uid);
			$statement->bindValue(':jid', $jid);
			$statement->execute();
			$pages = $statement->fetchAll();
			return $pages;
		} catch (Exception $e) {
			echo "An error occured while retrieving pages.";
		}
	}

	public function getUser($uid) {
		$db_conn = $this->getDBConnection();

		try {
			$query = 'SELECT * FROM user WHERE uid = :uid';
			$statement = $db_conn->prepare($query);
			$statement->bindValue(':uid', $uid);
			$statement->execute();
			$user = $statement->fetchAll()[0];
			return $user;
		} catch (Exception $e) {
			echo "An error has occured while retriving user from database";
		}
	}

	public function getJournal($uid, $jid) {
		$db_conn = $this->getDBConnection();

		try {
			$query = 'SELECT * FROM journal WHERE uid = :uid AND jid = :jid';
			$statement = $db_conn->prepare($query);
			$statement->bindValue(':uid', $uid);
			$statement->bindValue(':jid', $jid);
			$statement->execute();
			$journal = $statement->fetchAll()[0];
			return $journal;
		} catch (Exception $e) {
			echo "An error has occured while retriving journal from database";
		}
	}

	public function getPage($uid, $jid, $pid) {
		$db_conn = $this->getDBConnection();

		try {
			$query = 'SELECT * FROM page WHERE uid = :uid AND jid = :jid AND pid = :pid';
			$statement = $db_conn->prepare($query);
			$statement->bindValue(':uid', $uid);
			$statement->bindValue(':jid', $jid);
			$statement->bindValue(':pid', $pid);
			$statement->execute();
			$page = $statement->fetchAll()[0];
			return $page;
		} catch (Exception $e) {
			echo "An error has occured while retriving page from database";
			return false;
		}
	}

	public function validateUser($username, $password) {
		$db_conn = $this->getDBConnection();
		$un_valid_user = null;

		try {
			$query = 'SELECT * FROM user WHERE username = :username';
			$statement = $db_conn->prepare($query);
			$statement->bindValue(':username', $username);
			$statement->execute();
			$un_valid_user = $statement->fetchAll()[0];
		} catch (Exception $e) {
			echo "An error has occured while retriving journal from database";
			return false;
		}

		if ($un_valid_user != null) {
			if (password_verify($password, $un_valid_user['password'])) {
				$valid_user = [];
				$valid_user['uid'] = $un_valid_user['uid'];
				$valid_user['username'] = $un_valid_user['username'];
				$valid_user['email'] = $un_valid_user['email'];
				$valid_user['first_name'] = $un_valid_user['first_name'];
				$valid_user['last_name'] = $un_valid_user['last_name'];

				return $valid_user;
			} else {
				return false;
			}
		}
	}

	public function searchContent($uid, $search, $journal) {
		$db_conn = $this->getDBConnection();

		try {
			$query = "SELECT p.title
			          ,		 p.event_date
			          ,		 p.page_number
					  FROM page p
					  WHERE p.content LIKE :search
					  AND uid = :uid
					  AND jid = :jid
					  LIMIT 5";
		  	$statement = $db_conn->prepare($query);
		  	$statement->bindValue(":search", '%'.$search.'%');
		  	$statement->bindValue(":uid", $uid);
		  	$statement->bindValue(":jid", $journal);
		  	$statement->execute();
		  	$matched_pages = $statement->fetchAll();
		  	return $matched_pages;
		} catch (Exception $e) {
			echo "An error has occured while searching";
			return false;
		}
	}
}
?>