<?php
$name = $_POST['name'];
if($name == '') {
   echo 'Stranger, please tell me your name!';
} elseif($name == 'Rohit' || $name == 'Virat' || $name == 'Dhoni' || $name == 
'Ashwin' || $name == 'Harbhajan') {
   echo 'Hello, master!';
} else {
   echo $name . ', I don\'t know you!';
}
?>