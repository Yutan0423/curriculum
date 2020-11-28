CREATE DATABASE checktest4 DEFAULT CHARSET=utf8;

USE checktest4;


CREATE TABLE users(id INT NOT NULL AUTO_INCREMENT,first_name VARCHAR(20) NOT NULL,last_name VARCHAR(20) NOT NULL,last_login TIMESTAMP,PRIMARY KEY(id))DEFAULT CHARSET=utf8;


CREATE TABLE posts(id INT NOT NULL AUTO_INCREMENT,title VARCHAR(50) NOT NULL,category_no INT NOT NULL,comment VARCHAR(255) NOT NULL,created TIMESTAMP,PRIMARY KEY(id))DEFAULT CHARSET=utf8;


INSERT INTO users(first_name, last_name, last_login) VALUES('翔伍', '隼田', now());

INSERT INTO posts(title, category_no, comment, created) VALUES
('近場の居酒屋について', 1, '庄屋は案外良い店だという件について', NOW()),
('大洗に行ってきた', 2, '大洗はいいぞ', NOW()),
('最近読んだ本', 3, 'オブジェクト指向設計', NOW()),
('オフィス近場の安いランチ', 1, '天狗酒場', NOW()),
('静岡の良さ', 2, '富士山', NOW());

INSERT INTO users (name, pass) values("林健", "9uu9");

INSERT INTO users(name, pass) values("田中", "9gg9");

insert into users(name, pass) values("丹", "tantan3");

insert into users(name, pass) values("藤原", "yuichan8");