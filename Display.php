

<?php
include ("Connection.php");
session_start();


$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{

}
else
{
    header('location:Display.php');
}
// error_reporting(0);
// selecting all data from firstproject database.
$query = "SELECT * FROM signup_table";

// executing query.
$data = mysqli_query($conn,$query);

// number of rows in database.
$total = mysqli_num_rows($data);

// it is an function which display data in array format.


// echo $total;

if($total != 0)
{
    ?>

    <h2 align="center">Displaying all records</h2>
    <center><table border="1" cellspacing="5" width="85%" >
        <tr>
        <th width="4%">ID</th >
        <th width="10%">First Name</th >
        <th width="10%">Lirst Name</th >
        <th width="20%">Email</th >
        <th width="20%">Password</th >
        <th width="20%">Operations</th >
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
                <td>"."$result[id]"."</td>
                <td>"."$result[fname]"."</td>
                <td>"."$result[lname]"."</td>
                <td>"."$result[email]"."</td>
                <td>"."$result[password]"."</td>

                <td>
                <a href='Update_design.php?id=$result[id]'><input type = 'submit' value = 'Update' class = 'update'></a>
                
                <a href='Delete.php?id=$result[id]'><input type = 'submit' value = 'Delete' class = 'delete' onclick = 'return checkdelete()'></a>

                </td>



            </tr>
            ";
        
    }
}
else
{
    echo ("No record found");
}
    ?>
    </table>
</center>

<a href="Logout.php"><input type="submit" name="" value="Logout">
<script>
    function checkdelete()
    {
        return confirm('Are you sure, you want to delete?');
    }
</script>
