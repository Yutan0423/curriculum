DAFAULT CHARSET=utf8;

CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(255),
    role VARCHAR(20),
    created DATETIME,
    modified DATETIME,
    deleted INT DEFAULT 0,
    PRIMARY KEY(id)
)DEFAULT CHARSET=utf8;

CREATE TABLE customers(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    line_type INT,
    contact_type INT,
    agency_id INT,
    status INT,
    contact_day DATETIME,
    created DATETIME,
    modified DATETIME,
    deleted DATETIME,
    PRIMARY KEY(id)
)DEFAULT CHARSET=utf8;

CREATE TABLE agencies(
    id INT NOT NULL AUTO_INCREMENT,
    agency_name VARCHAR(50),
    created DATETIME,
    modified DATETIME,
    deleted INT DEFAULT 0,
    PRIMARY KEY(id)
)DEFAULT CHARSET=utf8;