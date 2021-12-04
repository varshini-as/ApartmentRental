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
        <link rel="stylesheet" type="text/css" href="design.css style.css">
    </head>
    <body class="special">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">RentalLife</a>
                </div>
                <ul class="nav navbar-nav float-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Property Services</a></li>
                <li><a href="logout_process.php">Log Out</a></li>
                </ul>
            </div>
        </nav>
    <center>
        <div class="jumbotron" style="max-width: 550px; border-radius: 20px;">
            <h3><b>Maintenance Services</b></h3>
            <h4>High-quality workmanship at low prices. Reliable and affordable repairs. Book a service today!</h4>
            <button class="btn btn-primary" value="submit" onclick="location.href='http://localhost/MiniProject/maintenance_form.php'">Book</button>
        </div>
    </center>

   
            
    <div class="row" >
        <center>
      <div class="col-md-3 col-sm-6 col-sm-offset-3">
         <div class="thumbnail">
            <center>
               <img src="images/A.jpg" class="img-responsive" alt="">
               <div class="caption">
                  <h3>Pest Control</h3>
                  <p>Price:Rs 800.00</p>
               </div>
            </center>
         </div>
      </div>
      <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
            <center>
                <img src="images/interior.jpeg" class="img-responsive" alt="">
               <div class="caption">
                  <h3>Interior</h3>
                  <p>Price:Rs 1000.00</p>
               </div>
            </center>
         </div>
      </div>
        </center>
   </div>
   <div class="row">
      <div class="col-md-3 col-sm-6 col-sm-offset-3">
         <div class="thumbnail">
            <center>
               <img src="images/electrical.jpeg" class="img-responsive" alt="">
               <div class="caption">
                  <h3>Electrical Repairs</h3>
                  <p>Price:Rs 800.00</p>
               </div>
            </center>
         </div>
      </div>
      <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
            <center>
                <img src="images/plumbing.jpeg" class="img-responsive" alt="">
               <div class="caption">
                  <h3>Plumbing</h3>
                  <p>Price:Rs 1200.00</p>
               </div>
            </center>
         </div>
      </div>
   </div>
</body>
</html>


