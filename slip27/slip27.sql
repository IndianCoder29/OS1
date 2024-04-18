CREATE DATABASE test;
/c test;
CREATE TABLE voters (
    id SERIAL PRIMARY KEY,
    name VARCHAR(20),
    age INT,
    nationality VARCHAR(20)
);