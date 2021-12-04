<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "apartmentmanagement";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

$name = $_POST['name'];
$mail = $_POST['email'];
$passwd = $_POST['pass'];
$phone = $_POST['phone'];
$addr = $_POST['address'];

if($_POST == 'submit'){ // check if any option was selected
	
        $sql_u = "SELECT * FROM owner WHERE OMAIL='$mail'";  //check if username already exists
  	$res_u = mysqli_query($conn, $sql_u);
        if (mysqli_num_rows($res_u) > 0) {   // username exists
                header("LOCATION: mail_taken.php");
                exit();
            }
        else{    // username does not exist in database
              
                $sql = "INSERT INTO owner (ONAME,OMAIL,CITY,PHONE,password) VALUES ('$name','$mail','$addr','$phone','$passwd')";
                if ($conn->query($sql) === TRUE) {
                
                } else {
                   echo "Error: " . $sql . "<br>" . $conn->error;
                }
  	}
         // insert email as username and password to 'admin' table of database

}
 
$conn->close();

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
                    <a class="navbar-brand" href="#">RentalLife</a>
                </div>
                <ul class="nav navbar-nav float-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Property Services</a></li>
                <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h2>You have successfully registered!</h2>
                <p style="size: 25px;">Here is the information you have submitted:</p>
    <ol>
        <li><h4><em>Name:</em> <?php echo $_POST["name"]?></h4></li>
        <li><h4><em>Email:</em> <?php echo $_POST["email"]?></h4></li>
        <li><h4><em>Address:</em> <?php echo $_POST["address"]?></h4></li>
    </ol>
                <form action="login.php" method="post">
                    <button type="submit" class="btn btn-info">Login <span class="glyphicon glyphicon-user"></span> </button>
                </form>
            </div>
        </div>
        <footer>
            <center>
                <h6>Copyright © RentalLife | All rights reserved. | Contact Us: +91 9000 9000</h6>
            </center>
        </footer>
    </body>
</html>