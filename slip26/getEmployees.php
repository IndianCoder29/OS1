<?php
 $host = 'localhost'; // Change as needed
 $db   = 'your_database';
 $user = 'your_username';
 $pass = 'your_password';
 $dsn = "pgsql:host=$host;dbname=$db";
 $dbconn = pg_connect($dsn);
 $sql = "SELECT eno, ename FROM EMP";
 $result = pg_query($dbconn, $sql);
 $data = array();
 while ($row = pg_fetch_assoc($result)) {
    $data[] = $row;
 }
 echo json_encode($data);
 ?>
 getEmployeeDetails.php
 <?php
 $host = 'localhost'; // Change as needed
 $db   = 'test';
 $user = 'root';
$pass = '';
 $dsn = "pgsql:host=$host;dbname=$db";
 $dbconn = pg_connect($dsn);
 $eno = $_GET['eno'];
 $sql = "SELECT * FROM EMP WHERE eno = $1";
 $result = pg_query_params($dbconn, $sql, array($eno));
 $data = pg_fetch_assoc($result);
 echo json_encode($data);
 ?>