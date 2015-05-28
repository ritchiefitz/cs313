<?php
	$server = '127.0.0.1';
	$database = 'scripture';
	$username = 'adminn8qcPyU';
	$password = 'En9H8_kr5X4J';
	$dsn = 'mysql:host=' . $server . ';dbname=' . $database;

	$db_connect = new PDO($dsn, $username, $password);

	$book = filter_input(INPUT_POST, 'book');
	$chapter = filter_input(INPUT_POST, 'chapter');
	$verse = filter_input(INPUT_POST, 'verse');
	$topics = $_POST['topics'];

	echo $book . "<br>";
	echo $chapter . "<br>";
	echo $verse . "<br>";
	foreach ($topics as $topic) {
		echo $topic . "<br>";
	}

	$query = "INSERT INTO scriptures
			  ( book
			  , chapter
			  , verse
			  )
			  VALUE
			  ( :book
			  , :chapter
			  , :verse
			  )";
	
	$statement = $db_connect->prepare($query);
	$statement->bindValue(':book', $book);
	$statement->bindValue(':chapter', $chapter);
	$statement->bindValue(':verse', $verse);
	$statement->execute();

	$scriptureId = $db_connect->lastInsertId();

	foreach ($topics as $topic) {
		$query = 'INSERT INTO scriptures_topics
				  ( sid
				  , tid
				  )
				  VALUES
				  ( :sid
				  , :tid
				  )';
		$statement = $db_connect->prepare($query);
		$statement->bindValue(':sid', $scriptureId);
		$statement->bindValue(':tid', $topic);
		$statement->execute();
	}

	$scripturesQuery = "SELECT s.book,s.chapter,s.verse,t.topic
						FROM scriptures s
						INNER JOIN scriptures_topics st
						ON s.id = st.sid
						INNER JOIN topics
						ON t.id = st.tid";

	foreach ($db_connect->query($scripturesQuery) as $row) {
		echo $row["book"] . "<br>";
	}

?>