-- 
-- CREATES DATABASE AND SWITCHES TO IT
-- 
DROP DATABASE IF EXISTS GRID_DB;
CREATE DATABASE IF NOT EXISTS GRID_DB;
USE GRID_DB;

-- 
-- USER SCHEMA
-- 
CREATE TABLE User (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    user_id VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    is_admin BOOLEAN NOT NULL DEFAULT FALSE,
    login_key VARCHAR(255),
    primary_role VARCHAR(255),
    secondary_role VARCHAR(255),
    employment_status VARCHAR(255)
);

INSERT INTO User (fname, lname, user_id, email, pwd, is_admin) VALUES ('Billy', 'Mays', 'test_admin', 'bmays@goodwillsp.org', '$2y$10$clvV7HA0bmgVBjnwZKYJ/OiGFBR.5R/yNSi8KFY7UVBHdhzR32Wru', TRUE);
INSERT INTO User (fname, lname, user_id, email, pwd, is_admin) VALUES ('Dick', 'Tracy', 'test_user', 'dtracy@goodwillsp.org', '$2y$10$KFUzxGTLxJ2dRnrxSYCBs.wPgxxBlIqGgfkRihqamOnhU195026XG', FALSE);

-- 
-- COMPTYPE SCHEMA
-- 
CREATE TABLE CompType(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    base_val FLOAT NOT NULL DEFAULT 0,
    is_active BOOLEAN NOT NULL DEFAULT TRUE
);

INSERT INTO CompType (name, base_val) VALUES ('Desktop', 0);
INSERT INTO CompType (name, base_val) VALUES ('Laptop', 20);
INSERT INTO CompType (name, base_val) VALUES ('All-In-One', 40);

SELECT name AS comp_type FROM CompType;

-- 
-- TAG SCHEMA
-- 
CREATE TABLE Tag(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    base_val FLOAT NOT NULL DEFAULT 0,
    is_active BOOLEAN NOT NULL DEFAULT TRUE
);

INSERT INTO Tag (name, base_val) VALUES ('Webcam', 10);
INSERT INTO Tag (name, base_val) VALUES ('HDMI', 10);
INSERT INTO Tag (name, base_val) VALUES ('Touchscreen', 50);
INSERT INTO Tag (name, base_val) VALUES ('Bluray', 10);
INSERT INTO Tag (name, base_val) VALUES ('SSD (Drive 1)', 20);
INSERT INTO Tag (name, base_val) VALUES ('SSD (Drive 2)', 20);

SELECT name AS tags FROM Tag;

-- 
-- CPUSpeed SCHEMA
-- 
CREATE TABLE CPUSpeed(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    base_val FLOAT NOT NULL DEFAULT 0,
    is_active BOOLEAN NOT NULL DEFAULT TRUE
);

INSERT INTO CPUSpeed(name, base_val) VALUES ('1.0Ghz', 0);
INSERT INTO CPUSpeed(name, base_val) VALUES ('1.1Ghz', 0);
INSERT INTO CPUSpeed(name, base_val) VALUES ('1.2Ghz', 0);
INSERT INTO CPUSpeed(name, base_val) VALUES ('1.3Ghz', 0);
INSERT INTO CPUSpeed(name, base_val) VALUES ('1.4Ghz', 0);
INSERT INTO CPUSpeed(name, base_val) VALUES ('1.5Ghz', 0);
INSERT INTO CPUSpeed(name, base_val) VALUES ('1.6Ghz', 0);
INSERT INTO CPUSpeed(name, base_val) VALUES ('1.7Ghz', 0);
INSERT INTO CPUSpeed(name, base_val) VALUES ('1.8Ghz', 0);
INSERT INTO CPUSpeed(name, base_val) VALUES ('1.9Ghz', 0);
INSERT INTO CPUSpeed(name, base_val) VALUES ('2.0Ghz', 5);
INSERT INTO CPUSpeed(name, base_val) VALUES ('2.1Ghz', 5);
INSERT INTO CPUSpeed(name, base_val) VALUES ('2.2Ghz', 5);
INSERT INTO CPUSpeed(name, base_val) VALUES ('2.3Ghz', 5);
INSERT INTO CPUSpeed(name, base_val) VALUES ('2.4Ghz', 5);
INSERT INTO CPUSpeed(name, base_val) VALUES ('2.5Ghz', 5);
INSERT INTO CPUSpeed(name, base_val) VALUES ('2.6Ghz', 10);
INSERT INTO CPUSpeed(name, base_val) VALUES ('2.7Ghz', 10);
INSERT INTO CPUSpeed(name, base_val) VALUES ('2.8Ghz', 10);
INSERT INTO CPUSpeed(name, base_val) VALUES ('2.9Ghz', 10);
INSERT INTO CPUSpeed(name, base_val) VALUES ('3.0Ghz', 10);
INSERT INTO CPUSpeed(name, base_val) VALUES ('3.1Ghz', 15);
INSERT INTO CPUSpeed(name, base_val) VALUES ('3.2Ghz', 15);
INSERT INTO CPUSpeed(name, base_val) VALUES ('3.3Ghz', 15);
INSERT INTO CPUSpeed(name, base_val) VALUES ('3.4Ghz', 15);
INSERT INTO CPUSpeed(name, base_val) VALUES ('3.5Ghz', 15);
INSERT INTO CPUSpeed(name, base_val) VALUES ('3.6Ghz', 20);
INSERT INTO CPUSpeed(name, base_val) VALUES ('3.7Ghz', 20);
INSERT INTO CPUSpeed(name, base_val) VALUES ('3.8Ghz', 20);
INSERT INTO CPUSpeed(name, base_val) VALUES ('3.9Ghz', 20);
INSERT INTO CPUSpeed(name, base_val) VALUES ('4.0Ghz', 20);
INSERT INTO CPUSpeed(name, base_val) VALUES ('4.1Ghz', 25);
INSERT INTO CPUSpeed(name, base_val) VALUES ('4.2Ghz', 25);
INSERT INTO CPUSpeed(name, base_val) VALUES ('4.3Ghz', 25);
INSERT INTO CPUSpeed(name, base_val) VALUES ('4.4Ghz', 25);
INSERT INTO CPUSpeed(name, base_val) VALUES ('4.5Ghz', 25);
INSERT INTO CPUSpeed(name, base_val) VALUES ('4.6Ghz', 30);
INSERT INTO CPUSpeed(name, base_val) VALUES ('4.7Ghz', 30);
INSERT INTO CPUSpeed(name, base_val) VALUES ('4.8Ghz', 30);
INSERT INTO CPUSpeed(name, base_val) VALUES ('4.9Ghz', 30);
INSERT INTO CPUSpeed(name, base_val) VALUES ('5.0Ghz', 35);

SELECT name AS cpu_speed FROM CPUSpeed;

-- 
-- RAM SCHEMA
-- 
CREATE TABLE RAM(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    base_val FLOAT NOT NULL DEFAULT 0,
    is_active BOOLEAN NOT NULL DEFAULT TRUE
);

INSERT INTO RAM (name, base_val) VALUES ('<1GB', 0);
INSERT INTO RAM (name, base_val) VALUES ('1GB', 0);
INSERT INTO RAM (name, base_val) VALUES ('2GB', 0);
INSERT INTO RAM (name, base_val) VALUES ('3GB', 0);
INSERT INTO RAM (name, base_val) VALUES ('4GB', 0);
INSERT INTO RAM (name, base_val) VALUES ('6GB', 5);
INSERT INTO RAM (name, base_val) VALUES ('8GB', 10);
INSERT INTO RAM (name, base_val) VALUES ('12GB', 15);
INSERT INTO RAM (name, base_val) VALUES ('16GB', 20);
INSERT INTO RAM (name, base_val) VALUES ('24GB', 25);
INSERT INTO RAM (name, base_val) VALUES ('32GB', 30);

SELECT name AS ram FROM RAM;

-- 
-- HDD SCHEMA
-- 
CREATE TABLE HDD(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    base_val FLOAT NOT NULL DEFAULT 0,
    ssd_val FLOAT NOT NULL DEFAULT 0,
    is_active BOOLEAN NOT NULL DEFAULT TRUE
);

INSERT INTO HDD (name, base_val, ssd_val) VALUES ('120GB', 0, 10);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('160GB', 0, 10);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('250GB', 10, 20);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('320GB', 15, 20);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('500GB', 20, 40);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('640GB', 25, 40);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('750GB', 30, 60);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('1.0TB', 40, 100);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('1.5TB', 50, 120);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('2.0TB', 75, 150);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('3.0TB', 100, 200);
INSERT INTO HDD (name, base_val, ssd_val) VALUES ('4.0TB', 120, 250);

SELECT name AS hdd FROM HDD;

-- 
-- CPUMODEL AND CPUGEN SCHEMA
-- 
CREATE TABLE CPUModel (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    base_val FLOAT NOT NULL DEFAULT 1,
    is_active BOOLEAN NOT NULL DEFAULT TRUE
);

INSERT INTO CPUModel (brand, name, base_val) VALUES ('Intel', 'Core i3', 10);
INSERT INTO CPUModel (brand, name, base_val) VALUES ('Intel', 'Core i5', 20);
INSERT INTO CPUModel (brand, name, base_val) VALUES ('Intel', 'Core i7', 40);
INSERT INTO CPUModel (brand, name, base_val) VALUES ('AMD', 'Ryzen 3', 15);
INSERT INTO CPUModel (brand, name, base_val) VALUES ('AMD', 'Ryzen 5', 30);
INSERT INTO CPUModel (brand, name, base_val) VALUES ('AMD', 'Ryzen 7', 50);

CREATE TABLE CPUGen (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cpu_id INT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    base_mul FLOAT DEFAULT 1,
    price_override FLOAT(8, 4) DEFAULT NULL,
    is_active BOOLEAN NOT NULL DEFAULT TRUE,
    FOREIGN KEY (cpu_id) REFERENCES CPUModel(id)
);

INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (1, 'Gen 1', 1);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (1, 'Gen 2', 2);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (1, 'Gen 3', 3);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (1, 'Gen 4', 4);

INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (2, 'Gen 1', 1);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (2, 'Gen 2', 2);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (2, 'Gen 3', 3);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (2, 'Gen 4', 4);

INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (3, 'Gen 1', 1);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (3, 'Gen 2', 2);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (3, 'Gen 3', 3);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (3, 'Gen 4', 4);

INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (4, '1000 Series', 1);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (4, '2000 Series', 2);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (4, '3000 Series', 3);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (4, '4000 Series', 4);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (4, '5000 Series', 5);

INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (5, '1000 Series', 1);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (5, '2000 Series', 2);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (5, '3000 Series', 3);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (5, '4000 Series', 4);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (5, '5000 Series', 5);

INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (6, '1000 Series', 1);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (6, '2000 Series', 2);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (6, '3000 Series', 3);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (6, '4000 Series', 4);
INSERT INTO CPUGen (cpu_id, name, base_mul) VALUES (6, '5000 Series', 5);

SELECT brand AS cpu_brand FROM CPUModel GROUP BY brand;
SELECT name AS cpu_model FROM CPUModel WHERE brand = 'Intel';
SELECT CPUGen.name AS cpu_gen FROM CPUModel INNER JOIN CPUGen ON CPUModel.id = CPUGen. cpu_id WHERE CPUModel.brand = 'Intel' AND CPUModel.name = 'Core i5';