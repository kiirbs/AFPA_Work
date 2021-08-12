DROP DATABASE if EXISTS exo1;

CREATE DATABASE exo1;

USE exo1;

CREATE TABLE people (
	perNum INT NOT NULL auto_INCREMENT PRIMARY KEY,
	perNom VARCHAR(50) NOT NULL,
	perPrenom VARCHAR(50) NOT NULL,
	perAdresse VARCHAR(50) NOT NULL,
	perVille VARCHAR(50) NOT NULL
);

CREATE TABLE groupe (
	groNum int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	groLibelle VARCHAR(50)
);

CREATE TABLE appartient (
	perNum INT,
	FOREIGN KEY (perNum) REFERENCES people(perNum),
	groNum INT,
	FOREIGN KEY (groNum) REFERENCES groupe(groNum)
);