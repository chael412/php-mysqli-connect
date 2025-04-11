<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "php_mysqli";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    echo "connecton failed!";
}
