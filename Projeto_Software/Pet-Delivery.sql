CREATE DATABASE PROJ_SOFT;

USE PROJ_SOFT;

CREATE TABLE CADASTRO (
EMAIL VARCHAR(100) NOT NULL ,
PASSWORD VARCHAR(20) NOT NULL);

CREATE TABLE RESGATE (
NOME VARCHAR(30) NOT NULL,
RAÇA VARCHAR(20) NOT NULL,
 SEXO ENUM('Macho', 'Fêmea'),
 LOCALIZACAO VARCHAR(255),
    IMAGEM VARCHAR(255)
);