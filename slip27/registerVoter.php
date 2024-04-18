<?php
 $name = $_POST['name'];
 $age = $_POST['age'];
 $nationality = $_POST['nationality'];
 // Connect to your database and insert the voter's details
 $db = new PDO('pgsql:host=localhost;dbname=test', 'root', '');
 $sql = "INSERT INTO voters (name, age, nationality) VALUES (?, ?, ?)";
 $stmt = $db->prepare($sql);
 $stmt->execute([$name, $age, $nationality]);
 echo "Voter registered successfully!";
 ?>
