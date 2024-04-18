CREATE DATABASE login;
/c login;
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(25) NOT NULL
);
INSERT INTO users VALUES
('john_doe', 'password123');