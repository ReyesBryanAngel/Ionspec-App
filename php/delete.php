<?php
$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn, 'may_db');

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
