<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>

<h2>Login Form</h2>

<form action="#" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>

<p align="center">If you don't have an account, <a href='SignUP.php'>register here</a>.</p>


</body>
</html>


<?php

  include("Connection.php");

if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $pwd = $_POST['password'];

  $query = "SELECT * FROM signup_table where email= '$username' && password='$pwd'";

  $data = mysqli_query($conn,$query);

  $total = mysqli_num_rows($data);
 
  if($total==1)
  {
    // echo "Login Successful";
   
    $_SESSION['user_name'] = $username;
     // header('location:Display.php');
    ?>

    <meta http-equiv = "refresh" content = "0; url = http://localhost/php/Display.php" />


  <?php
  }
  
  else{
    echo "Login Failed";
  }



}

?>
