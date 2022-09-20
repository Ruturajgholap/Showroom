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
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!-- fonticonlink -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- head links ends -->

</head>

<body>
    <style>
        body {
            /* background-color: aliceblue; */
            /* background-image: url("images/bg.jpg"); */
            /* background-position: center; */
            background-repeat: no-repeat;
            background-image: url("images/sales.gif");
            /* background-repeat: no-repeat;      */
            background-size: cover;
            /* background-size: contain; */
            color: white;
        }

        .inputform {
            padding: 30px;
            margin-top: 30px;
            width: 50%;
        }

        .middlenamediv {
            margin-top: 150px;
            text-align: center;
            background-color: #ffd59a;
        }

        .middlenamediv h1 {
            color: red;
        }

        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #efdecd;
            /* opacity: 0.2; */
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
        <button onclick="location.href='mainpage2.php'" class="btn btn-success block"
            onclick="myFunction()">HOME</button>
        <button onclick="location.href='newcustomer2.php'" class="btn btn-success block">NEW CUSTOMER</button>
        <button onclick="location.href='quotation2.php'" class="btn btn-success">QUATATAION</button>
        <!-- <button onclick="location.href='addstock.php'" class="btn btn-success">ADD STOCK</button> -->
        <button onclick="location.href='checkstock2.php'" class="btn btn-success">CHECK STOCK</button>
        <button onclick="location.href='cancelbooking2.php'" class="btn btn-success">CANCEL BOOKING</button>
        <button onclick="location.href='delevary2.php'" class="btn btn-success">DELEVARY</button>
        <!-- <button onclick="location.href='delevery.php'" class="btn btn-success">DELIVERY</button> -->
        <!-- <button onclick="location.href='delevery.php'" class="btn btn-success">EMPTY</button> -->
        <!-- <button onclick="location.href='delevery.php'" class="btn btn-success">EMPTY</button> -->
        <!-- <button onclick="location.href='delevery.php'" class="btn btn-success">EMPTY</button> -->
        <button class="btn btn-success" onclick="myFunction()">LOGOUT</button>
    </div>
    <!-- new customer page open  -->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 middlenamediv">
                <h1 style="font-family: 'Bungee Spice', cursive;">YOU ARE LOGIN AS A SALESMAN </h1>
                <!-- <img src="images/sales.gif" alt=""> -->
            </div>
            <div class="col-sm-4"></div>
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
    <script>
        function newDoc() {
          
        }
    </script>
</body>

</html>