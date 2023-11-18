<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
        <nav class="header_nav">
            <div class="header_logo">
                <h1> Ogey RRat </h1>
                <div class="header_logo-overlay"></div>
            </div>
            <ul class="header_menu">
                <li><a href="#menu">Menu</a></li>
                <li><a href="#food">Recommendations</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about-us">About Us</a></li>
            </ul>
        </nav>

    </header>

<div class="header">
        <h2>Home Page</h2>
</div>
<div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
          ?>
        </h3>
      </div>
        <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <form method="post" action="customer_menu.php">
                    <center><button type="submit" class="btn" name="place_order">Select Food</button>
                
        
    <?php endif ?>
</div>
<p><br> <center><a href="index.php?logout='1'" style="color: red;">logout</a> </p>
</body>
</html>