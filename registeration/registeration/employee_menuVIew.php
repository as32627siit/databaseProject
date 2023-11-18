<?php
include('employee_server.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Employees View Added Menu</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>All Added Menu</h2>
  </div>
  <div class="content">
    <?php
    $query = "SELECT * FROM checkmenu";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];

        // Perform the delete operation
        $delete_query = "DELETE FROM checkmenu WHERE id = $delete_id";
        $delete_result = mysqli_query($conn, $delete_query);

        if ($delete_result) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }

    echo "<center><br>Total Menu: $total <br>";

    if ($total != 0) {
        echo "<br><center><table border='1' cellspacing='7' width='85%'>";
        echo "<tr><th>Menu</th><th>Price</th><th>Amount</th><th>Action</th></tr>";

        // Loop through the result set
        while ($result = mysqli_fetch_assoc($data)) {
            // Access and display other columns if needed
            $id = $result['id'];
            $menu = $result['menu'];
            $price = $result['price'];
            $amount = $result['amount'];

            echo "<tr><td><center>$menu</td><td><center>$price</td><td><center>$amount</td>";
            echo "<td><center><a href='employee_menuUpdate.php?id=$id'>Update</a> | <a href='?delete_id=$id'>Delete</a></td></tr>";
        }

        echo "</table>";
    } else {
        echo "No records found";
    }
    ?>
    <br><p><a href="employee_menuAdd.php?logout='1'" style="color: blue;">Back to Add Menu</a></p>
  </div>
</body>
</html>