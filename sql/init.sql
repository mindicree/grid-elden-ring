DROP DATABASE IF EXISTS GRID_DB;

CREATE DATABASE IF NOT EXISTS GRID_DB;
USE GRID_DB;

CREATE TABLE SystemLog (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    old_coa VARCHAR(32),
    new_coa VARCHAR(32),
    serial_no VARCHAR(32) NOT NULL,
    brand VARCHAR(32) NOT NULL,
    model VARCHAR(32) NOT NULL,
    os VARCHAR(32) NOT NULL,
    computer_type VARCHAR(32) NOT NULL,
    source VARCHAR(32) NOT NULL,
    cpu_brand VARCHAR(32) NOT NULL,
    cpu_model VARCHAR(32) NOT NULL,
    cpu_gen VARCHAR(32) NOT NULL,
    cpu_speed FLOAT(4, 2) NOT NULL,
    ram VARCHAR(8) NOT NULL,
    hdd VARCHAR(8) NOT NULL,
    disk_drive VARCHAR(32) NOT NULL,
    tags JSON,
    tech VARCHAR(32) NOT NULL,
    price FLOAT(10, 2),
    dt_initial_system_log DATETIME,
    dt_initial_irl_log DATETIME,
    dt_last_update DATETIME
);
