<?php include('server.php') ?>
<?php include('errors.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
        $admin = $_POST["username"];
        $pass = $_POST["password"];

        if ($admin == "admin" && $pass == "root"){
            header('location: employee_menuAdd.php');     
        }
        
          else {
                  
                  echo "Wrong";
                  header('location: employee_login.php');
              
          }
    ?>
</body>
</html>

