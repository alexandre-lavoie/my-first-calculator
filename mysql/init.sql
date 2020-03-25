DROP DATABASE IF EXISTS myfirstcalculator;
CREATE DATABASE myfirstcalculator;

USE myfirstcalculator;

CREATE TABLE calculatorsecret (
	id  INTEGER PRIMARY KEY AUTO_INCREMENT,
	title   TEXT NOT NULL,
	content TEXT NOT NULL
);

INSERT INTO calculatorsecret (title, content) VALUES ("CTF", "MTL{4_c41cu14t0r_sql_1nj3t10n?}");