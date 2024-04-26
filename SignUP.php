<?php include("Connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
    <title>Signup Page</title>
</head>
<body>

<h2>Signup Form</h2>

<form action="" method="POST">
    <label for="fname">First Name:</label><br>
    <input type="text" id="fname" name="fname" required><br>

    <label for="lname">Last Name:</label><br>
    <input type="text" id="lname" name="lname" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="pwd">Password:</label><br>
    <input type="password" id="pwd" name="pwd" required><br>

    <label for="pwd-repeat">Repeat Password:</label><br>
    <input type="password" id="pwd-repeat" name="pwd_repeat" required><br><br>

    <input type="checkbox" id="terms" name="terms" required>
    <label for="terms">I agree to the Terms and Conditions</label><br><br>

    <input type="submit" value="Submit" name="register">
</form>

</body>
</html>


<?php
  if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $rep_password = $_POST['pwd_repeat'];

    // $query is a  random variable containing insert into values.

    $query = "INSERT INTO signup_table(fname,lname,email,password,repeat_password) values('$fname','$lname','$email','$password','$rep_password')";


    // $data is a  random variable containing mysqli_query.
    $data = mysqli_query($conn,$query);


    // checking if data is stored or not.
    if($data){
       echo "Data is Inserted into Database";
       ?>

      <meta http-equiv="refresh" content="2;url=http://localhost/php/Login.php" />

      <?php
    }
    
    else{
      echo "Process failed";
    }
  }
  ?>