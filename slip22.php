<!-- 
    first create database using :
    CREATE DATABASE student;
    \c student
 -->

<?php

// Establish connection to PostgreSQL database
$conn = pg_connect("host=localhost dbname='student' user='root' password='");

// Check if connection was successful
if (!$conn) {
    echo "Connection failed.";
    exit;
}

// Create student table
$query = "CREATE TABLE student (
            Rollno SERIAL PRIMARY KEY,
            Name VARCHAR(50) NOT NULL,
            Class VARCHAR(10) NOT NULL
        )";
$result = pg_query($conn, $query);

if (!$result) {
    echo "Error creating table: " . pg_last_error($conn);
    exit;
} else {
    echo "Table created successfully.<br>";
}

// Insert 5 records into student table
$insert_query = "INSERT INTO student (name, class)
                    VALUES ('John Doe', '10A'),
                           ('Jane Smith', '9B'),
                           ('Bob Johnson', '11C'),
                           ('Sarah Lee', '12D'),
                           ('Tom Brown', '8E')";

$insert_result = pg_query($conn, $insert_query);

if (!$insert_result) {
    echo "Error inserting records: " . pg_last_error($conn);
    exit;
} else {
    echo "Records inserted successfully.";
}

// Close database connection
pg_close($conn);

?>
