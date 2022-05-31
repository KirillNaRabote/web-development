CREATE DATABASE university CHARACTER SET utf8 COLLATE utf8_general_ci;
USE university;
CREATE TABLE Faculty(
	id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL
    );
CREATE TABLE Groups(
	id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    faculty_id INT NOT NULL,
    FOREIGN KEY (faculty_id) REFERENCES Faculty(id)
    );
CREATE TABLE Student(
	id INT AUTO_INCREMENT PRIMARY KEY,
    surname VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    groups_id INT NOT NULL,
    FOREIGN KEY (groups_id) REFERENCES Groups(id)
    );
    
INSERT INTO 
    Faculty (title)
VALUES 
    ("ФИиВТ"),
    ("ЭФ"),
    ("МСФ");

INSERT INTO 
	Groups (title, faculty_id) 
VALUES 
	("ПС-11", 1),
	("ПС-12", 1),
	("ПС-13", 1),
	("БИ-11", 2),
	("БИ-12", 2),
	("БИ-13", 2),
	("МС-11", 3),
	("МС-12", 3),
	("МС-13", 3);
    
INSERT INTO 
	Student (surname, age, groups_id) 
VALUES 
	("Egorov", 18, 1),
    ("Ivanov", 18, 1),
    ("Ivanov", 19, 1),
    ("Podoplelov", 18, 1),
    ("Podoplelov", 19, 1),
    ("Podoplelov", 7, 2),
    ("Podoplelov", 18, 2),
    ("Podoplelov", 18, 2),
    ("Yakovlev", 18, 2),
    ("Yakovlev", 18, 2),
    ("Yakovlev", 17, 3),
    ("Yakovlev", 18, 3),
    ("Moskvin", 18, 3),
    ("Moskvin", 25, 3),
    ("Moskvin", 18, 3),
    ("Moskvin", 20, 4),
    ("Moskvin", 18, 4),
    ("Moskvin", 18, 4),
    ("Bebrov", 18, 4),
    ("Bebrov", 21, 4),
    ("Bebrov", 18, 5),
    ("Bebrov", 30, 5),
    ("Bebrov", 19, 5),
    ("Smirnov", 28, 5),
    ("Smirnov", 19, 5),
    ("Smirnov", 18, 6),
    ("Smirnov", 17, 6),
    ("Smirnov", 18, 6),
    ("Chernyadiev", 52, 6),
    ("Chernyadiev", 20, 6),
    ("Chernyadiev", 23, 7),
    ("Chernyadiev", 23, 7),
    ("Chernyadiev", 19, 7),
    ("Ozhogin", 18, 7),
    ("Ozhogin", 27, 7),
    ("Ozhogin", 30, 8),
    ("Ozhogin", 20, 8),
    ("Ozhogin", 18, 8),
    ("Almakaev", 60, 8),
    ("Almakaev", 18, 8),
    ("Almakaev", 54, 9),
    ("Almakaev", 50, 9),
    ("Fedorov", 60, 9),
    ("Fedorov", 26, 9),
    ("Fedorov", 17, 9);