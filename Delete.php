<?php
include ("Connection.php");
$id = $_GET['id'];
$query = "DELETE FROM signup_table where id='$id'";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
 <meta http-equiv = "refresh" content = "3; url = http://localhost/php/Display.php" />
    <?php
}
else{
    echo "<script>alert('Failed to Deleted')</script>";
}
?>
