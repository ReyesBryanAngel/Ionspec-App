<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "../css/add.css" ?>
    </style>
    <title>ADD DATA</title>
</head>

<body>
    <div class="form_wrapper">
        <form action="server_db.php">
            <button class="close_form">&times;</button>
        </form>
        <form action="" method="post">
            <input type="text" name="fname" placeholder="First Name" required><br>
            <input type="text" name="lname" placeholder="Last Name" required><br>
            <input type="number" name="cell_number" placeholder="Cellphone Number" required><br>
            <input type="text" name="address" placeholder="Complete Address" required><br>
            <input type="text" name="modeofpayment" placeholder="Mode of Payment" required><br>
            <input type="text" name="productname" placeholder="Product Name" required><br>
            <input type="number" name="order_quantity" placeholder="Order Quantity" required><br>
            <input type="number" name="price" placeholder="Total Price" required>
            <div class="buttons">
                <a href="server_db.php" id="cancel">Cancel</a>
                <button type="submit" name='add' id="submit">Add Data</button>
            </div>
        </form>
</body>

</html>
<?php

$servername = "x71wqc4m22j8e3ql.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "s8z1rccahkocpqs7";
$password = "c6kdlysaxjk60wa4";
$dbname = "ueihmh18ojbfew0f";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$db = mysqli_select_db($conn, $dbname);


if (isset($_POST['add'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cell_number = $_POST['cell_number'];
    $address = $_POST['address'];
    $modeofpayment = $_POST['modeofpayment'];
    $productname = $_POST['productname'];
    $order_quantity = $_POST['order_quantity'];
    $price = $_POST['price'];

    $query = "INSERT INTO customer_orders( `fname`, `lname`, `cell_number`, `address`, `modeofpayment`, `productname`, `order_quantity`, `price`) VALUES('$fname', '$lname', '$cell_number', '$address', '$modeofpayment', '$productname', '$order_quantity', '$price')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script';
        header('location:server_db.php');
    } else {
        echo '<script> alert("Data not Saved"); </script>';
    }
}
