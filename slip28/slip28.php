<?php
$host = 'localhost'; 
$dbname = 'login';
$user = 'root'; 
$password = ''; 

// Create a DSN string for PostgreSQL
$dsn = "pgsql:host=$host;dbname=$dbname;user=$user;password=$password";

try {
    // Connect to the PostgreSQL database
    $pdo = new PDO($dsn);

    // Retrieve username and password from POST data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL query
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";

    // Prepare the statement
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    // Execute the statement
    $stmt->execute();

    // Check if there are any rows returned
    if ($stmt->rowCount() > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>