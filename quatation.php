<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN PAGE</title>
    <!-- head link important  -->
    <link rel="stylesheet" href="Bootstrap/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/mainstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!-- fonticonlink -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- head links ends -->

</head>

<body>


    <style>
        body {
              /* background-color: aliceblue; */
              background-image: url("images/bg.jpg");
            /* background-position: center; */
            background-repeat: no-repeat;
            /* background-repeat: no-repeat;      */
            background-size: cover;
            /* background-size: contain; */
            /* color:white; */
        }

        .inputform {
            padding: 30px;
            margin-top: 150px;
            width: 50%;
        }

        table,
        th,
        td {
            border: 1px solid;
            padding: 10px;
            margin: 10px;
        }

        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            /* background-color: beige; */
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav button {
            margin-top: 20px;

            text-decoration: none;
            padding: 5px;
            width: 100%;
        }

        .sidenav button:hover {
            color: #f1f1f1;
        }
        .quotaiondiv
        {
            padding:30px;
            text-align:center;
            border:1px solid black;
            margin-top:10px;
            /* background-color: rgba(59, 225, 247, 0.752); */
            background-color: rgb(226, 141, 241);
            opacity:0.9;
            
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
    <div class="sidenav">

        <button onclick="location.href='mainpage.php'" class="btn btn-success block"
            onclick="myFunction()">HOME</button>
        <button onclick="location.href='newcustomer.php'" class="btn btn-success block">NEW CUSTOMER</button>
        <button onclick="location.href='quatation.php'" class="btn btn-success">QUATATAION</button>
        <button onclick="location.href='addstock.php'" class="btn btn-success">ADD STOCK</button>
        <button onclick="location.href='checkstock.php'" class="btn btn-success">CHECK STOCK</button>
        <button onclick="location.href='cancelbooking.php'" class="btn btn-success">CANCEL BOOKING</button>
        <!-- <button onclick="location.href='servicing.php'" class="btn btn-success">SERVICING</button> -->
        <button onclick="location.href='delevery.php'" class="btn btn-success">DELIVERY</button>
        <!-- <button onclick="location.href='delevery.php'" class="btn btn-success">EMPTY</button>
        <button onclick="location.href='delevery.php'" class="btn btn-success">EMPTY</button>
        <button onclick="location.href='delevery.php'" class="btn btn-success">EMPTY</button> -->
        <button class="btn btn-success" onclick="myFunction()">LOGOUT</button>
    </div>

    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
               
                </div>
                <div class="col-sm-3 quotaiondiv">
                    <img src="images/1.jpg" alt="" srcset="">
                    <h3>NAME : TATA NEXON </h3>
                    <h4>Rs ₹ 7.59 Lakh onwards</h4>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">VIEW DETAILS</button>
                </div>
                <div class="col-sm-3  quotaiondiv">
                <img src="images/2.jpg" alt="" srcset="">
                <h3>NAME : TATA NEXON EV </h3>
                    <h4>Rs ₹ 14.99 Lakh onwards</h4>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Open Modal</button>
                </div>
                <div class="col-sm-3 quotaiondiv">
                <img src="images/3.jpg" alt="" srcset="">
                <h3>NAME :Tata Punch </h3>
                    <h4>Rs₹ 5.93 Lakh onwards</h4>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Open Modal</button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
               
                </div>
                <div class="col-sm-3 quotaiondiv">
                    <img src="images/4.jpg" alt="" srcset="">
                    <h3>NAME : Tata Altroz </h3>
                    <h4>Rs ₹ 6.29 Lakh onwards</h4>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">VIEW DETAILS</button>
                </div>
                <div class="col-sm-3  quotaiondiv">
                <img src="images/4.jpg" alt="" srcset="">
                <h3>NAME : Tata Harrier </h3>
                    <h4>Rs ₹ 14.69 Lakh onwards 
          </h4>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Open Modal</button>
                </div>
                <div class="col-sm-3 quotaiondiv">
                <img src="images/3.jpg" alt="" srcset="">
                <h3>NAME : Tata Safari </h3>
                    <h4>Rs₹ 15.35 Lakh onwards</h4>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Open Modal</button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
               
                </div>
                <div class="col-sm-3 quotaiondiv">
                    <img src="images/1.jpg" alt="" srcset="">
                    <h3>NAME : Tata Tigor </h3>
                    <h4>Rs ₹ 5.99 Lakh onwards</h4>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">VIEW DETAILS</button>
                </div>
                <div class="col-sm-3  quotaiondiv">
                <img src="images/2.jpg" alt="" srcset="">
                <h3>NAME :Tata Tigor EV </h3>
                    <h4>₹ 12.49 Lakh onwards</h4>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Open Modal</button>
                </div>
                <div class="col-sm-3 quotaiondiv">
                <img src="images/3.jpg" alt="" srcset="">
                <h3>NAME : Tata Tiago</h3>
                    <h4>₹ 5.39 Lakh onwards</h4>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Open Modal</button>
                </div>
            </div>
        </div>
    </div>
      
    <script>
        function myFunction() {
            var txt;
            if (confirm("Do you want to close ?")) 
            {
                window.location.assign("index.php");
            } 
            else
            {
                txt = "You pressed Cancel!";
            }
            document.getElementById("demo").innerHTML = txt;
        }
    </script>
</body>

</html>

<!-- model 1 code here  -->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">TATA Nexon</h4>
        </div>
        <div class="modal-body">
            <h2>NAME : TATA Nexon </h2>
            <br>
            </br>
            <h4>PRICE : ₹ 7.59 Lakh onwards RS</h4>
            <h4>Mileage :16.3 to 22 kmpl</h4>
            <h4>Engine :1199 to 1497 cc</h4>
            <h4>Safety :5 Star (Global NCAP)</h4>
            <h4>Fuel Type :Petrol & Diesel</h4>
            <h4>Transmission :Manual & Automatic (AMT</h4>
            <h4>Seating Capacity :5 Seater</h4>
            <h4>Mileage :</h4>

          <p>.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- model one code end  -->

<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">TATA Nexon</h4>
        </div>
        <div class="modal-body">
            <h2>NAME : TATA Nexon EV </h2>
            <br>
            </br>
            <h4>PRICE : ₹ 14.99 Lakh onwards RS</h4>
            <h4>Driving Range :312 kml</h4>
            <h4>Charging Time :8.5 hrs</h4>
            <h4>Safety :5 Star (Global NCAP)</h4>
            <h4>Fuel Type :Electric</h4>
            <h4>Transmission :Automatic</h4>
            <h4>Seating Capacity :5 Seater</h4>
            <h4>Battery Capacity :30.2 kWh</h4>

          <p>.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tata Punch</h4>
        </div>
        <div class="modal-body">
            <h2>NAME : Tata Punch </h2>
            <br>
            </br>
            <h4>PRICE : ₹ 5.93 Lakh onwards</h4>
            <h4>Mileage :18.8 to 18.9 kmpl</h4>
            <h4>Engine :1199 cc</h4>
            <h4>Safety :5 Star (Global NCAP)</h4>
            <h4>Fuel Type :Petrol</h4>
            <h4>Transmission :Manual & Automatic (AMT)</h4>
            <h4>Seating Capacity :5 Seater</h4>
            

          <p>.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tata Altroz</h4>
        </div>
        <div class="modal-body">
            <h2>NAME : Tata Altroz </h2>
            <br>
            </br>
            <h4>PRICE :  ₹ 6.29 Lakh onwardsRS</h4>
            <h4>Mileage :18.34 to 23 kmpl</h4>
            <h4>Engine :1199 to 1497 cc</h4>
            <h4>Safety :5 Star (Global NCAP)</h4>
            <h4>Fuel Type :Petrol & Diesel</h4>
            <h4>Transmission :Manual & Automatic (AMT)</h4>
            <h4>Seating Capacity :5 Seater</h4>
            <h4>Mileage :</h4>

          <p>.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>