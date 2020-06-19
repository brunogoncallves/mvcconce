CREATE DATABASE concessionaria DEFAULT CHARACTER SET utf8;
USE concessionaria;

CREATE TABLE Carros (
    chassi INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR (255),
    modelo VARCHAR (255),
    cor VARCHAR (255)
);
CREATE TABLE Motores (
    MotorID INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    potencia VARCHAR(3),
    qntCilindros INTEGER,
    chassi INTEGER,
    FOREIGN KEY (chassi) REFERENCES Carros(chassi)
);