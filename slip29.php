<!DOCTYPE html>
 <html>
 <body>
 <h2>Number Operations</h2>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Number: <input type="number" name="num">
  <input type="submit">
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $num = $_POST['num'];
    // Fibonacci Series
    echo "<h3>Fibonacci Series:</h3>";
    $a = 0; 
    $b = 1; 
    echo $a . ", "; 
    echo $b . ", "; 
    for($i = 1; $i <= $num-2; $i++) { 
        $c = $a + $b; 
        echo $c . ", "; 
        $a = $b; 
        $b = $c; 
    }
    // Sum of digits
    echo "<h3>Sum of Digits:</h3>";
    $sum = array_sum(str_split($num));
    echo $sum;
 }
 ?>
 </body>
 </html>
