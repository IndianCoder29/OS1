<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["employee_details"] = $_POST;
    header("Location: earning_details.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
</head>
<body>
    <h2>Enter Employee Details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Eno: <input type="text" name="eno"><br>
        Ename: <input type="text" name="ename"><br>
        Address: <input type="text" name="address"><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
