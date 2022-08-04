<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "../css/edit.css" ?>
    </style>
    <title>EDIT DATA</title>
</head>

<body>
    <?php
    error_reporting(0);
    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, 'may_db');

    $id = $_POST['id'];

    $query = "SELECT * FROM customer_orders WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        while ($rows = mysqli_fetch_array($query_run)) {
    ?>
            <div class="form_wrapper">

                <form action="server_db.php">
                    <button class="close_form">&times;</button>
                </form>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">

                    <input type="text" name="fname" value="<?php echo $rows['fname'] ?>" placeholder="First Name" required><br>

                    <input type="text" name="lname" value="<?php echo $rows['lname'] ?>" placeholder="Last Name" required><br>

                    <input type="number" name="cell_number" value="<?php echo $rows['cell_number'] ?>" placeholder="Cellphone Number" required><br>

                    <input type="text" name="address" value="<?php echo $rows['address'] ?>" placeholder="Complete Address" required><br>

                    <select name="modeofpayment" id="confirm_select" required>
                        <option value="">Delivery Options</option>
                        <option value="Cash On Delivery via LBC">Cash On Delivery via LBC</option>
                        <option value="Cash On Pickup via LBC">Cash On Pickup via LBC</option>
                        <option value="Gcash via J&T">Gcash via J&T</option>
                    </select>

                    <input type="text" name="productname" value="<?php echo $rows['productname'] ?>" placeholder="Product Name"><br>

                    <input type="number" name="order_quantity" value="<?php echo $rows['order_quantity'] ?>" placeholder="Order Quantity"><br>

                    <input type="number" name="price" value="<?php echo $rows['price'] ?>" placeholder="Total Price" placeholder="Total Price">
                    <button onclick="submit_alert()" type="submit" name='edit' id="submit">Change Data</button>
                </form>
            <?php
            if (isset($_POST['edit'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $cell_number = $_POST['cell_number'];
                $address = $_POST['address'];
                $modeofpayment = $_POST['modeofpayment'];
                $productname = $_POST['productname'];
                $order_quantity = $_POST['order_quantity'];
                $price = $_POST['price'];

                $query = "UPDATE customer_orders SET fname='$fname', lname='$lname', cell_number='$cell_number', address='$address', modeofpayment='$modeofpayment', productname='$productname', order_quantity='$order_quantity', price='$price' WHERE id='$id' ";
                $query_run = mysqli_query($conn, $query);


                if ($query_run) {
                    echo '<script> alert(Data updated)</script>';
                    header("Location:server_db.php");
                }
            } else {
                echo '<script> alert(Data Not Updated!)</script>';
            }
        }
            ?>

            </div>
        <?php
    } else {
        echo '<script> alert(No Record Found!)</script>';
    }
        ?>
</body>

</html>