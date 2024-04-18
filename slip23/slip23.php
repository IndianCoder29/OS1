<?php

// Establish connection to PostgreSQL database
$conn = pg_connect("host=localhost dbname='student' user='root' password=''");

// Check if connection was successful
if (!$conn) {
    echo "Connection failed.";
    exit;
}

// Function to create student table
function create_student_table($conn) {
    $query = "CREATE TABLE IF NOT EXISTS student (
            rollno SERIAL PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            class VARCHAR(10) NOT NULL
        )";
    $result = pg_query($conn, $query);

    if (!$result) {
        echo "Error creating table: " . pg_last_error($conn);
        exit;
    } else {
        echo "Table created successfully.<br>";
    }
}

// Function to insert records into student table
function insert_records($conn) {
    $insert_query = "INSERT INTO student (name, class) VALUES 
                    ('John Doe', '10A'),
                    ('Jane Smith', '9B'),
                    ('Bob Johnson', '11C'),
                    ('Sarah Lee', '12D'),
                    ('Tom Brown', '8E')";

    $insert_result = pg_query($conn, $insert_query);

    if (!$insert_result) {
        echo "Error inserting records: " . pg_last_error($conn);
        exit;
    } else {
        echo "Records inserted successfully.<br>";
    }
}

// Function to display records from student table
function display_records($conn) {
    $query = "SELECT * FROM student";
    $result = pg_query($conn, $query);

    if (!$result) {
        echo "Error retrieving records: " . pg_last_error($conn);
        exit;
    }

    echo "<table>";
    echo "<tr><th>Roll No</th><th>Name</th><th>Class</th></tr>";
    while ($row = pg_fetch_assoc($result)) {
        echo "<tr><td>" . $row['rollno'] . "</td><td>" . $row['name'] . "</td><td>" . $row['class'] . "</td></tr>";
    }
    echo "</table>";
}

// Create student table
create_student_table($conn);

// Insert records into student table
insert_records($conn);

// Display records from student table
display_records($conn);

// Close database connection
pg_close($conn);
?>