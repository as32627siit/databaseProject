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
        <h2>Register</h2>
  </div>
        
  <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password_1">
        </div>
        <div class="input-group">
          <label>Confirm password</label>
          <input type="password" name="password_2">
        </div>
        <div class="input-group">
          <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
                Already a member? <a href="login.php">Sign in</a>
        </p>
  </form>
</body>
</html>
