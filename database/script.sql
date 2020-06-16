CREATE DATABASE concessionaria DEFAULT CHARACTER SET utf8;
USE concessionaria;

CREATE TABLE Motores (
    MotorID INTEGER NOT NULL AUTO INCREMENT PRIMARY KEY,
    potencia VARCHAR (3),
    qntCilindros INTEGER
    chassi INTEGER,
    FOREIGN KEY (chassi) REFERENCES Carros(chassi)
);
CREATE TABLE carros (
    chassi INTEGER NOT NULL AUTO INCREMENT PRIMARY KEY,
    marca VARCHAR (255),
    modelo VARCHAR (255),
    COR VARCHAR (255),
    motor INTEGER NOT NULL,
    
);