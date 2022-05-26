CREATE DATABASE senharobusta;

CREATE TABLE usuarios
(
    id INT AUTO_INCREMENT,
    nome VARCHAR (50) NOT NULL,
    email VARCHAR (100) NOT NULL,
    senha VARCHAR (15) NOT NULL,

    PRIMARY KEY (id)
);
