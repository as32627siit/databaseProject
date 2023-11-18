<?php
include('employee_server.php');
include('errors.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menu_id = mysqli_real_escape_string($conn, $_POST["menu_id"]);
    $new_menu = mysqli_real_escape_string($conn, $_POST["new_menu"]);
    $new_price = mysqli_real_escape_string($conn, $_POST["new_price"]);
    $new_amount = mysqli_real_escape_string($conn, $_POST["new_amount"]);

    $update_query = "UPDATE checkmenu SET menu='$new_menu', price='$new_price', amount='$new_amount' WHERE id='$menu_id'";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        header('location: employee_menuView.php');
        exit();
    } else {
        array_push($errors, "Failed to update menu item");
    }
}

if (isset($_GET['id'])) {
    $menu_id = mysqli_real_escape_string($conn, $_GET['id']);
    $select_query = "SELECT * FROM checkmenu WHERE id='$menu_id'";
    $select_result = mysqli_query($conn, $select_query);

    if (mysqli_num_rows($select_result) == 1) {
        $menu_data = mysqli_fetch_assoc($select_result);
    } else {
        array_push($errors, "Menu item not found");
        header('location: employee_menuView.php');
        exit();
    }
} else {
    header('location: employee_menuView.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Menu Item</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Update Menu Item</h2>
    </div>

    <form method="post" action="employee_menuUpdate.php">
        <?php include('errors.php'); ?>
        <input type="hidden" name="menu_id" value="<?php echo $menu_data['id']; ?>">
        
        <div class="input-group">
            <label>Menu</label>
            <input type="text" name="new_menu" value="<?php echo $menu_data['menu']; ?>" required>
        </div>

        <div class="input-group">
            <label>Price</label>
            <input type="text" name="new_price" value="<?php echo $menu_data['price']; ?>" required>
        </div>

        <div class="input-group">
            <label>Amount</label>
            <input type="text" name="new_amount" value="<?php echo $menu_data['amount']; ?>" required>
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="update_menu">Update Menu</button>
        </div>
    </form>

    <br><p><center><a href="employee_menuView.php" style="color: blue;">Back to View All Menu</a></p>
</body>
</html>