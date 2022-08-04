<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_account";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Connection Failed!";
}
