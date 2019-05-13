SELECT * FROM students

SELECT firstname FROM students

SELECT firstname, lastname, age FROM students

SELECT students FROM students WHERE gender like 'f% '

SELECT students FROM students WHERE school = 'Andy School'

SELECT firstname FROM students ORDER BY firstname DESC

SELECT(2) firstname FROM students ORDER BY firstname DESC

INSERT INTO students (idStudents, nom, prenom, datenaissance, genre, school)
VALUES ('31', 'Dalor', 'Ginette', '1930-01-01', 'F', '1');

UPDATE students
SET prenom = 'Omer', genre= 'M'
WHERE idStudents = 31;

DELETE FROM students WHERE idStudents='3';

UPDATE students
SET students.school = school.school
WHERE students.school = school.idschool;