<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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
                    <a class="navbar-brand" href="login.php">RentalLife</a>
                </div>
                <ul class="nav navbar-nav float-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="flipcard">
                <div class="flipcard-inner">
                <center>
                    <div class="flipcard-front">
                    <div class="panel">
                        <div class="panel-heading panel-primary">
                            <h3>Login</h3>
                        </div>
                        <div class="panel-body">
                            <br>
                            <script>
                                
                            </script>
                            <form name="loginform" action="profile.php" method="post">
                                <fieldset>
                                    
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username"  required>
                                </div><br>
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control" placeholder="Password" required>
                                </div>
                                <input type="submit" class="btn btn-primary" name="submit" value="Login">
                                    
                                </fieldset>
                            </form>
                           
                        </div>
                        <div class="panel-footer">
                            <p style="font-size: 15px; text-align: left">Don't have an account?<a href="signup.php"> Register.</a></p>
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


