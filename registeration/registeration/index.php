
<?php include ('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Select User</title>

        <link rel="stylesheet" href="style.css"> 
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
        </body>
    </header>
       <div class = "loginpagemain-content"> 
       
        <div class="loginpage-content">
            <h2>Please Select User</h2>
        </div>

        <form action="login.php" method="post">
        <div class="input-group">
            <button type="submit" name="user_customer" class="btn">Customer</button>
        </div>
        </form>

        <form action="employee_login.php" method="post">
        <div class="input-group">
            <button type="submit" name="user_employee" class="btn">Employee</button>
        </div>
        
        </form>
        </div>
    
</html>