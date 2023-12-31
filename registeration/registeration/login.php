<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
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
        <h2>Customer Login Page</h2>
  </div>
         
  <form method="post" action="server.php">
        <?php include('errors.php'); ?>

        
        <!-- notification message -->
        <?php if (isset($_SESSION['error'])) : ?>
      <div class="error" >
        <h3>
          <?php 
                echo $_SESSION['error']; 
                unset($_SESSION['error']);
          ?>
        </h3>
      </div>
        <?php endif ?>



        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
                Not yet a member? <a href="register.php">Sign up</a>
        </p>
        <p>
                <a href="index.php">Click to go back</a>
        </p>
  </form>
</body>
</html>