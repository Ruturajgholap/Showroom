<?php

$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'project'); 

if (isset($_POST['submit'])) {
  
    $cust_id = mysqli_real_escape_string($db, $_POST['cust_id']);
    $model = mysqli_real_escape_string($db, $_POST['model']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $color = mysqli_real_escape_string($db, $_POST['color']);
    $finalprice = mysqli_real_escape_string($db, $_POST['finalprice']);
    $advances = mysqli_real_escape_string($db, $_POST['advances']);
    $deleverydate = mysqli_real_escape_string($db, $_POST['deleverydate']);
  
    if (count($errors) == 0) {
        
        $query = "INSERT INTO bookingCustmer (cust_id, model, type, color,finalprice,advances,deleverydate) 
                  VALUES('$cust_id', '$model', '$type','$color','$finalprice','$advances','$deleverydate')";
        mysqli_query($db, $query);
        
    }
    else{
      echo "Data not inserted .......";
    }
  }

?>
<!-- <?php
// include 'database_conn.php';
//$servername="localhost";
//$username="root";
//$password="";
//$database="project";
//$conn=mysqli_connect($servername,$username,$password,$database);

// if(isset($_POST['save']))
// {
//     //$bookingids=$_POST['booking_id'];
//     $custids=$_POST['cust_id'];  
//     //   booking_id   cust_id   model   type  color  finalprice advance  deleverydate
//     $models=$_POST['model'];
//     $types=$_POST['type'];
//     $colors=$_POST['color'];
//     $finalprices=$_POST['finalprice'];
//     $advances=$_POST['advance'];
//     $deleverydates=$_POST['deleverydate'];
//     $sql="insert into booking_custmer(cust_id,model,type,color,finalprice,advance,deleverydate)values('$custids','$models','$types','$colors','$finalprices','$advances','$deleverydates')";
//     echo "value insert...";
//     // die;
//      if(mysqli_query($conn,$sql))
//      {
//          echo "<script>alert('Saved')</script>";
//      }
//      mysqli_close($conn);
//     //echo "<script>alert('$custids')</script>";
// }
?>

// INSERT INTO `booking_custmer` (``, `cust_id`, `model`, `type`, `color`, `finalprice`, `advance`, `deleverydate`) 
VALUES (NULL, '3', 'Scrpio', '4wheelar', 'ttttt', '2000000', '67677', '2022-08-10'); -->