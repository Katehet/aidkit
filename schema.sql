-- There are 2 kinds of things in my first aid kit:
-- drugs and stuff.
-- There are medicines used individually (tablets),
-- and there are, for example, in bottles.
-- Pieces often run out before their expiration date

CREATE DATABASE aidkit
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE aidkit;

CREATE TABLE medicines (
    med_id INT auto_increment PRIMARY KEY,
    med_name CHAR(128) NOT NULL,
    med_number INT,
    med_type CHAR(64),
    dosed BOOLEAN NOT NULL DEFAULT true,
    exp_date DATE
);

CREATE TABLE category (
    cat_id INT auto_increment PRIMARY KEY,
    cat_name CHAR(128) NOT NULL,
    med_id INT
);

CREATE FULLTEXT INDEX ft_search ON medicines(med_name);