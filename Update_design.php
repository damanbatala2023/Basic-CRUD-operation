<?php include("Connection.php"); 
session_start();

$id = $_GET['id'];

$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{

}
else
{
    header('location:Display.php');
}
$query = "SELECT * FROM signup_table where id= $id";
$data = mysqli_query($conn,$query);

$result = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
    <title>Update Page</title>
</head>
<body>

<h2>UPDATE DETAILS</h2>

<form action="" method="POST">
    <label for="fname">First Name:</label><br>
    <input type="text" value="<?php echo $result['fname']; ?>" id="fname" name="fname" required><br>

    <label for="lname">Last Name:</label><br>
    <input type="text"value="<?php echo $result['lname']; ?>" id="lname" name="lname" required><br>

    <label for="email">Email:</label><br>
    <input type="email"value="<?php echo $result['email']; ?>" id="email" name="email" required><br>

    <label for="pwd">Password:</label><br>
    <input type="password"value="<?php echo $result['password']; ?>" id="pwd" name="pwd" required><br>

    <label for="pwd-repeat">Repeat Password:</label><br>
    <input type="password" value="<?php echo $result['repeat_password']; ?>"id="pwd-repeat" name="pwd_repeat" required><br><br>

    <input type="checkbox" id="terms" name="terms" required>
    <label for="terms">I agree to the Terms and Conditions</label><br><br>

    <input type="submit" value="Update Details" name="update">
</form>

</body>
</html>


<?php
  if(isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $rep_password = $_POST['pwd_repeat'];

    // $query is a  random variable containing insert into values.


    $query = "UPDATE signup_table set fname='$fname',lname='$lname',email='$email',password='$password',repeat_password='$rep_password' where id='$id'";
    // $data is a  random variable containing mysqli_query.
    $data = mysqli_query($conn,$query);


    // checking if data is stored or not.
    if($data){
      echo "Record updated";
      ?>

      <meta http-equiv = "refresh" content = "3; url = http://localhost/php/Display.php" />

      <?php

    }
    else{
      echo "Update failed";
    }
  }
  ?>