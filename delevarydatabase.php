<?php
// include 'database_conn.php';
$servername="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['submit']))
{
    $bookingid=$_POST['bookingid'];
    $bookingdate=$_POST['bookingdate'];
  
    $sql="insert into delevary(bookingid,date) values ('$bookingid','$bookingdate')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Saved')</script>";
    } 
    mysqli_close($conn);
}
?>