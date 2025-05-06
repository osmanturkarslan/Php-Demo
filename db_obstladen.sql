DROP DATABASE IF EXISTS db_obstladen;
CREATE DATABASE db_obstladen;
USE db_obstladen;

CREATE TABLE tbl_bestellung (
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    vorname VARCHAR(50),
    nachname VARCHAR(50),
    ort VARCHAR(50),
    sorte VARCHAR(20),
    menge INT(11)
) DEFAULT CHARSET=utf8;

INSERT INTO tbl_bestellung
(vorname, nachname, ort, sorte, menge)
VALUES
('Peter', 'Meyer', 'Visp', 'Gala', 2),
('Susanne', 'Brenner', 'Brig', 'Jonagold', 7);