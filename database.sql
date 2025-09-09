CREATE DATABASE IF NOT EXISTS web_programming;
USE web_programming;

CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    foods TEXT NOT NULL,
    quote TEXT NOT NULL,
    education VARCHAR(20) NOT NULL,
    time_of_day VARCHAR(20) NOT NULL,
    submission_date DATETIME NOT NULL
);