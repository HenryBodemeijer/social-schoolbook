DROP DATABASE IF EXISTS schoolbook;

CREATE DATABASE schoolbook;

USE schoolbook;

DROP TABLE IF EXISTS post;

CREATE TABLE post (
    id INT NOT NULL AUTO_INCREMENT,

    auteur VARCHAR(20),

    titel VARCHAR(50),

    bericht VARCHAR(200),

    afbeelding VARCHAR(250),

    likes INT NOT NULL ,

    datum TIMESTAMP DEFAULT CURRENT_TIMESTAMP,


    PRIMARY KEY (id)
);

    USE schoolbook;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id  int(10),
    username  varchar(100),
    email  varchar(100),
    user_type  varchar(100),
    password  varchar(100)
);

USE schoolbook;

DROP TABLE IF EXISTS comment;

CREATE TABLE comment (
    id INT NOT NULL AUTO_INCREMENT,
    comment VARCHAR(500),
    post_id INT NOT NULL,

    PRIMARY KEY (id)
);