<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "firstproject";

// making connection with servername,username,password,databasename.
// $conn is a variable storing mysqli_connect.
// mysqli_connect is connecting servername,....to database.
$conn = mysqli_connect($servername,$username,$password,$databasename);

// checking the connection.
if ($conn){
    //   echo "Connection ok";
}
else{
    echo "Connection failed";
}

?>