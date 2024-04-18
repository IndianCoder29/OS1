<?php

Session_start();
if(isset($_SESSION['pcount'
])){
    $_SESSION['pcount'] += 1;
}else{
    $_SESSION['pcount'] = 1;
}

echo "Session is visited for ", $_SESSION['pcount']," time/s";

?>