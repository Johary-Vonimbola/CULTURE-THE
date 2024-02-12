CREATE DATABASE theerie;
use theerie

drop table user;

CREATE TABLE user(
    idUser INT auto_increment primary key,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    dateNaissance DATE NOT NULL
)engine=innodb;

INSERT INTO user VALUES (DEFAULT,'Rakoto','Alex',sha1('rakoto'),'rakoto@gmail.com','2014-12-12');
INSERT INTO user VALUES (DEFAULT,'Rabe','Raymond',sha1('rabe'),'rabe@gmail.com','2014-12-12');
INSERT INTO user VALUES (DEFAULT,'Rasoa','Marie',sha1('rasoa'),'rasoa@gmail.com','2014-12-12');
INSERT INTO user VALUES (DEFAULT,'Ravao','Martine',sha1('ravao'),'ravao@gmail.com','2014-12-12');


CREATE TABLE variete(
    idVariete INT auto_increment primary key,
    nom VARCHAR(255) NOT NULL,
    occupation REAL,
    rendement REAL
)engine=innodb;

INSERT INTO variete VALUES (DEFAULT,'The vert',1.8,10);


CREATE TABLE parcelle(
    idParcelle INT auto_increment primary key,
    numero INT,
    surface REAL,
    idVarietePlantee INT,
    FOREIGN KEY (idVarietePlantee) REFERENCES variete(idVariete)
)engine=innodb;


CREATE TABLE cueilleur(
    idCueilleur INT auto_increment primary key,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    genre CHAR(1) NOT NULL,
    dateNaissance DATE NOT NULL
)engine=innodb;

INSERT INTO cueilleur VALUES(DEFAULT,'Johary','Vonimbola','M');