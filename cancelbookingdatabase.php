<?php
// include 'database_conn.php';
$servername="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['submit']))
{

    $name=$_POST['bookingid'];

    $sql="delete from `bookingcustmer` WHERE `bookingcustmer`.`bookingID` = 12";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Saved')</script>";
    } 
    mysqli_close($conn);
}
?>