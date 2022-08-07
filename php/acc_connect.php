<?php

$servername = "x71wqc4m22j8e3ql.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "s8z1rccahkocpqs7";
$password = "c6kdlysaxjk60wa4";
$dbname = "ueihmh18ojbfew0f";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Connection Failed!";
}
