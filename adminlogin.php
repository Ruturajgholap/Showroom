<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>LOGIN </title>
</head>

<body>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    .maindiv
    {
        padding-top:30px;
    text-align: center;
    align-items: center;
    margin-top:120px;
    /* padding: 70px; */
    border:1px solid black;
    border-radius:25px;
    background-color: rgb(145, 173, 198);
    }
        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed; 
            z-index: 1;
            /* Sit on top */
            left: 300px;;
            top: 0;
            width: 50%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 maindiv">
         <h2 style="font-family: 'Bungee Spice', cursive;">PLEASE LOGIN</h2>
         <h4>Wellcome to AutoGarage</h4>
                <img src="images/newimage.png" alt="" srcset="">
                <button onclick="document.getElementById('id01').style.display='block'"
                    style="width:auto;">Login</button>
                <button onclick="document.getElementById('salesman').style.display='block'"
                    style="width:auto;">SALESMAN</button>

            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>


    <div id="id01" class="modal">
        <form class="modal-content animate" name="admin" method="post" action="mainpage.php"
            onsubmit="return validateform1()">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>



    <!-- new model for salesman  -->
    <div id="salesman" class="modal">
        <form class="modal-content animate" name="sales" method="post" action="mainpage2.php"
            onsubmit="return validateform2()">
            <div class="imgcontainer">
                <span onclick="document.getElementById('salesman').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="suname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="spsw" required>
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('salesman').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }



        // new for salesman
        var modal = document.getElementById('salesman');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>



    <script>
        function validateform1() {
            var name = document.admin.uname.value;
            var password = document.admin.psw.value;

            if (name != "admin") {
                alert("CHECK USERNAME...");
                return false;
            }
            if (password != "admin") {
                alert("CHECK PASSWORD...");
                return false;
            }
        }
    </script>
    <script>
        function validateform2() {
            var name = document.sales.suname.value;
            var password = document.sales.spsw.value;

            if (name != "root") {
                alert("CHECK USERNAME...");
                return false;
            }
            if (password != "root") {
                alert("CHECK PASSWORD...");
                return false;
            }
        }
    </script>
</body>

</html>