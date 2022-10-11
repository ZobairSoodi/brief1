DROP DATABASE IF EXISTS brief1;

CREATE DATABASE brief1;
USE brief1;

CREATE TABLE promotion(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(25)
);
INSERT INTO promotion(nom) VALUES("promo1"),("promo2"),("promo3"),("promo4");