DROP DATABASE IF EXISTS GRID_DB;

CREATE DATABASE IF NOT EXISTS GRID_DB;
USE GRID_DB;

CREATE TABLE User (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    user_id VARCHAR(255) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    is_admin BOOLEAN NOT NULL DEFAULT FALSE,
    login_key VARCHAR(255),
    primary_role VARCHAR(255),
    secondary_role VARCHAR(255),
    employment_status VARCHAR(255)
);

INSERT INTO User (fname, lname, user_id, pwd, is_admin) VALUES ('Billy', 'Mays', 'test_admin', '$2y$10$clvV7HA0bmgVBjnwZKYJ/OiGFBR.5R/yNSi8KFY7UVBHdhzR32Wru', TRUE);
INSERT INTO User (fname, lname, user_id, pwd, is_admin) VALUES ('Dick', 'Tracy', 'test_user', '$2y$10$KFUzxGTLxJ2dRnrxSYCBs.wPgxxBlIqGgfkRihqamOnhU195026XG', FALSE);