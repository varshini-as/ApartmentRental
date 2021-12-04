<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   $host = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "apartmentmanagement";
    // Create database connection
    $conn = mysqli_connect($host, $userName, $password, $dbName);
   
  ?>
<html>
   <head>
        <title>Apartment Renting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="design.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php">RentalLife</a>
                </div>
                <ul class="nav navbar-nav float-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Property Services</a></li>
                <li><a href="#">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="flipcard">
                <div class="flipcard-inner signup">
                <center>
                    <div class="flipcard-back">
                        <div class="panel" style="margin-top: 30px;">
                        <div class="panel-heading panel-primary">
                            <h3>Sign Up</h3>
                        </div>
                        <div class="panel-body">
                            <br>
                            <script>
                            function validateForm() {
                                var name = document.forms["signupform"]["name"].value;
                                var mail = document.forms["signupform"]["email"].value;
                                var addr = document.forms["signupform"]["address"].value;
                                var ph = document.forms["signupform"]["phone"].value;
                                var ps = document.forms["signupform"]["pass"].value;
                                if (name === "" || mail === "" || addr === "" || ph === "" || ps === "") {
                                    alert("Please fill out all the fields.");
                                    return false;
                                }
                                if (ps.length < 6){
                                    alert("Password should be at least 6 characters long.");
                                    return false;
                                }
                                <?php ?>
                            }</script>
                            <form name="signupform" action="welcome.php" method="post" onsubmit="return validateForm()">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Address" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Password" required="">
                                </div>
                                 
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                        </div>
                        <br>
                        <div class="panel-footer">
                            <p style="font-size: 15px; text-align: left">Already have an account? Login <a href="login.php">here</a>.</p>
                        </div>
                    </div>
                    </div>
                        
                </center>
                </div>
            </div>
        </div>
        <footer>
            <center>
                <h6>Copyright © RentalLife | All rights reserved. | Contact Us: +91 9000 9000</h6>
            </center>
        </footer>
</html>


