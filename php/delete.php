<?php
$servername = "x71wqc4m22j8e3ql.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "s8z1rccahkocpqs7";
$password = "c6kdlysaxjk60wa4";
$dbname = "ueihmh18ojbfew0f";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM customer_orders WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script> alert("Data has been removed"); </script';
        header('location:server_db.php');
    } else {
        echo '<script> alert("Data still exists); </script>';
    }
}
