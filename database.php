<?php
$servername = "studmysql01.fhict.local";
$username = "dbi400999";
$password = "Group6Project";

$con = mysqli_connect($servername, $username, $password, "dbi400999");

if (!$con) {
    echo "Inable to establish MySQL." . PHP_EOL;
    echo "Error code errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error text error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>