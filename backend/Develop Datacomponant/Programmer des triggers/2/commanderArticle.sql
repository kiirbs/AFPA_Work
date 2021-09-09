DROP TABLE if EXISTS commanderArticle;

CREATE TABLE commanderArticle (
	codart INT NOT NULL,
	qte INT NOT NULL,
	daydate date NOT NULL,
	PRIMARY KEY (codart)
)