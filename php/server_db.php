<?php include_once('server_connection.php');
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


    $query = 'select * from customer_orders';
    $result = mysqli_query($conn, $query);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/e82b4ef8da.js" crossorigin="anonymous"></script>
        <style>
            <?php include "../css/server_db.css" ?>
        </style>
        <title>May Store | Customer Orders</title>

    </head>

    <body>
        <!--- Overlay Of the Page --->
        <div class="overlay"></div>
        <!--- Table --->
        <div class="useraccount">
            <span>Hello, <?php echo $_SESSION['name']; ?></span>
            <a href="login.php">Logout</a>
        </div>
        <div class="flex_function">
            <form action="add.php">
                <button class="add_data">Add Data</button>
            </form>
        </div>
        <table>
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Cellphone Number</th>
                <th>Address</th>
                <th>Mode of Payment</th>
                <th>Product Name</th>
                <th>Order Quantity</th>
                <th>Total Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <?php
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <tr>
                        <td class="hide_id" data-label="I.D"><?php echo $rows['id']; ?></td>
                        <td data-label="First Name"><?php echo $rows['fname']; ?></td>
                        <td data-label="Last Name"><?php echo $rows['lname']; ?></td>
                        <td data-label="Cellphone Number"><?php echo $rows['cell_number']; ?></td>
                        <td data-label="Address"><?php echo $rows['address']; ?></td>
                        <td data-label="Mode of Payment"><?php echo $rows['modeofpayment']; ?></td>
                        <td data-label="Product Name"><?php echo $rows['productname']; ?></td>
                        <td data-label="Order Quantity"><?php echo $rows['order_quantity']; ?></td>
                        <td data-label="Total Price"><?php echo $rows['price']; ?></td>

                        <!--- EDIT FUNCTION --->
                        <form action="edit.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                            <td><input type="submit" class="edit" value="EDIT"></td>
                        </form>
                        <!--- DELETE FUNCTION --->
                        <form action="delete.php" method="post" name="delete">
                            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                            <td>
                                <input type="submit" name="delete" class="delete" value="DELETE">
                            </td>
                        </form>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </body>

    </html>
<?php
} else {
    header("Location:login.php");
    exit();
}
?>