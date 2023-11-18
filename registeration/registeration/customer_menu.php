<?php
include('employee_server.php');

$query = "SELECT * FROM checkmenu";
$data = mysqli_query($conn, $query);

$menu_items = array();
if ($data) {
    while ($row = mysqli_fetch_assoc($data)) {
        $menu_items[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Menu for Customers</h2>
    </div>

    <div class="content">
        <?php if (empty($menu_items)) : ?>
            <p>No menu items available.</p>
        <?php else : ?>
            <form method="post" action="customer_order.php">
                <center>
                <table border="1" cellspacing="7" width="85%">
                    
                    <tr>
                        <th>Menu</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Quantity</th>
                    </tr>
                    <?php foreach ($menu_items as $item) : ?>
                        <tr>
                            <td><center><?php echo $item['menu']; ?></td>
                            <td><center><?php echo $item['price']; ?></td>
                            <td><center><?php echo $item['amount']; ?></td>
                            <td><center><input type="number" name="quantity[<?php echo $item['id']; ?>]" value="0" min="0"></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

                <div class="input-group">
                    <button type="submit" class="btn" name="place_order">Place Order</button>
                </div>
            </form>
        <?php endif; ?>
        <p><a href="home.php" style="color: blue;">Back to Home</a></p>
    </div>
</body>
</html>