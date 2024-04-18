<!-- 
    first create your database 
    CREATE DATABASE teacher;
    /c teacher

    CREATE TABLE teacher (
    tno SERIAL PRIMARY KEY,
    tname VARCHAR(100),
    qualification VARCHAR(100),
    salary NUMERIC(10, 2)
);

INSERT INTO teacher (tname, qualification, salary) VALUES 
('John Doe', 'Masters in Education', 50000.00),
('Jane Smith', 'Bachelor of Science', 45000.00),
('Bob Johnson', 'Ph.D. in Mathematics', 60000.00);

 -->



<?php
// Connect to database
$host = "localhost";
$dbname = "teacher";
$user = "root";
$pass = "";
$dsn = "pgsql:host=$host;dbname=$dbname";

try {
    $conn = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Retrieve selected teacher details
if (isset($_POST['tno'])) {
    $tno = $_POST['tno'];
    $sql = "SELECT * FROM teacher WHERE tno = :tno";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tno', $tno);
    $stmt->execute();

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Teacher Name: " . $row['tname'] . "<br>";
        echo "Qualification: " . $row['qualification'] . "<br>";
        echo "Salary: " . $row['salary'] . "<br>";
    } else {
        echo "No data found.";
    }
}

// Close database connection
$conn = null;
?>