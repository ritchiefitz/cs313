DROP DATABASE scripture;
CREATE DATABASE scripture;
USE scripture;

CREATE TABLE scriptures
( id 		INT				PRIMARY KEY		AUTO_INCREMENT
, book		VARCHAR(15)		NOT NULL
, chapter	INT				NOT NULL
, verse		INT				NOT NULL
);

CREATE TABLE topics
( id		INT 			PRIMARY KEY		AUTO_INCREMENT
, name		VARCHAR(15)		NOT NULL
);

CREATE TABLE scriptures_topics
( sid		INT 	NOT NULL
, tid		INT 	NOT NULL
, FOREIGN KEY (sid) REFERENCES scriptures(id)
, FOREIGN KEY (tid) REFERENCES topics(id)
);

INSERT INTO topics (name)
VALUES ('Faith')
, ('Sacrifice')
, ('Charity');