<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$cell_number = $_POST['cell_number'];
$address = $_POST['address'];
$modeofpayment = $_POST['modeofpayment'];
$productname = $_POST['productname'];
$order_quantity = $_POST['order_quantity'];
$price = $_POST['price'];

$conn = new mysqli('localhost', 'root', '', 'may_db');

if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into customer_orders(fname, lname, cell_number, address, modeofpayment, productname, order_quantity, price) values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssssss', $fname, $lname, $cell_number, $address, $modeofpayment, $productname, $order_quantity, $price);
    header('location: ../index.php');
    $stmt->execute();
    $stmt->store_result();
    $stmt->close();
    $conn->close();
}
