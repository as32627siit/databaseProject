
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
        <h2>* Warning : Employees Only *</h2>
  </div>
         
  <form method="post" action="employee_connect.php">
      


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
                If you are a customer please <a href="login.php">Click here</a>
        </p>
  </form>
</body>
</html>