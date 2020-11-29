CREATE TABLE books(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    date TIMESTAMP,
    stock INT NOT NULL,
    PRIMARY KEY(id)
)DEFAULT CHARSET=utf8;

CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
)DEFAULT CHARSET=utf8;