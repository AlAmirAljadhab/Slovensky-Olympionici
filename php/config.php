<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'MiroSkrutka');
define('DB_PASSWORD', 'SkrutkaTypu17');
define('DB_NAME', 'wufufuf');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>