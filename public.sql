CREATE DATABASE phpmvc;
USE phpmvc;

CREATE TABLE mahasiswa(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nama VARCHAR(200) NOT NULL,
    nim VARCHAR(8) NOT NULL,
    prodi VARCHAR(100) NOT NULL,
    email VARCHAR(1000) NOT NULL
);

SHOW TABLES;

INSERT INTO mahasiswa(nama, nim, prodi, email)
VALUES (
	('Rasyid Nandi Firmansyah', 'L0123117', 'Informatika', 'rasyidnf.id@gmail.com'),
    ('Raka Aleandra', 'L0123118', 'Informatika', 'rakalaleandra.id@gmail.com'),
    ('Tito Rizky Putra Wiyana', 'L0123119', 'Informatika', 'titorizky.id@gmail.com')
);