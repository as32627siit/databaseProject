<?php
include('employee_server.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Employees Add Menu</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Please Add Menu</h2>
  </div>
  <div class="content">
    <form action="#" method="post" id="menuForm">
      <div class="input-group" id="menuContainer">
        <!-- Initially, display one textbox -->
        <input type="text" name="menu" placeholder="Please Add Menu">
        <input type="text" name="price" placeholder="Please Add Price">
        <input type="text" name="amount" placeholder="Please Amount">
      </div>
      <button type="submit" name="addmenubutton" class="btn">Add Menu</button>
      <p><a href="employee_menuView.php?logout='1'" style="color: blue;">View All Menu</a></p>
      <?php
      if (isset($_POST['addmenubutton'])) {
          $menu = mysqli_real_escape_string($conn, $_POST['menu']);
          $price = mysqli_real_escape_string($conn, $_POST['price']);
          $amount = mysqli_real_escape_string($conn, $_POST['amount']);

          // Validate input (check if menu and price are not empty, add more validation if needed)
          if (!empty($menu) && !empty($price)) {
              $query = "INSERT INTO checkmenu (menu, price, amount) VALUES ('$menu', '$price', '$amount')";
              $result = mysqli_query($conn, $query);

              if ($result) {
                  echo "Added Menu: $menu, Price: $price, Amount: $amount";
              } else {
                  echo "Failed";
              }
          } else {
              echo "Menu and price are required fields.";
          }
      }
      ?>
    </form>
    <p><a href="index.php?logout='1'" style="color: red;">logout</a></p>
  </div>
</body>
</html>