<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to our website!</h1>
    <?php
    // PHP code to greet the user
    // Check if a username parameter is provided in the URL
    if(isset($_GET['username'])) {
        $username = $_GET['username'];
        // Display a personalized welcome message
        echo "<p>Hello, $username! We're glad you're here.</p>";
    } else {
        // If no username parameter is provided, display a generic welcome message
        echo "<p>Welcome! We're glad you're here.</p>";
    }
    ?>
</body>
</html>
