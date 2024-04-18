<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["earning_details"] = $_POST;
    header("Location: print_details.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earning Details</title>
</head>
<body>
    <h2>Enter Earning Details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Basic: <input type="text" name="basic"><br>
        DA: <input type="text" name="da"><br>
        HRA: <input type="text" name="hra"><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
