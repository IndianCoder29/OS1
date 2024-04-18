<?php
session_start();

if (!isset($_SESSION["employee_details"]) || !isset($_SESSION["earning_details"])) {
    header("Location: employee_details.php");
    exit;
}

$employee_details = $_SESSION["employee_details"];
$earning_details = $_SESSION["earning_details"];

$total = $earning_details["basic"] + $earning_details["da"] + $earning_details["hra"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Employee Details</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Eno</th>
        <th>Ename</th>
        <th>Address</th>
        <th>Basic</th>
        <th>DA</th>
        <th>HRA</th>
        <th>Total</th>
    </tr>
    <tr>
        <td><?php echo $employee_details["eno"]; ?></td>
        <td><?php echo $employee_details["ename"]; ?></td>
        <td><?php echo $employee_details["address"]; ?></td>
        <td><?php echo $earning_details["basic"]; ?></td>
        <td><?php echo $earning_details["da"]; ?></td>
        <td><?php echo $earning_details["hra"]; ?></td>
        <td><?php echo $total; ?></td>
    </tr>
</table>
</body>
</html>

<?php
// Clear session data
session_unset();
session_destroy();
?>
